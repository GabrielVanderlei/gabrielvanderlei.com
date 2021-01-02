import { useState } from "react"
import Template from "../../components/Template"
import styles from './index.module.css'

export default function Projects({ projects, information }) {
    const [selectedProjects, setSelectedProjects] = useState(projects);

    return (
        <Template title={information.title} description={information.description}>
            <h1 className={styles.h1}>
                {information.title}<br />
                <small>
                    {information.description}<br />
                </small><br />
            </h1>

            <div className={styles.content}>
                <div>
                    <input className={styles.longInput} type="text" placeholder="Insira um filtro" onChange={(e) => {
                        let value = (e.target.value).toLowerCase();
                        setSelectedProjects(projects.filter((projectContent) => {
                            let projectValues = Object.values(projectContent);
                            let searchPool = (projectValues.join(' ')).toLowerCase();
                            return searchPool.indexOf(value) > -1;
                        }))
                    }} />
                    <p>Visualizando atualmente {selectedProjects.length} projetos</p>
                </div><br />

                <div>
                    {selectedProjects.map((projectElement) => (
                        <div className={styles.projectCard}>
                            <div className={styles.title}>{projectElement.title}</div>
                            <div className={styles.client}>{projectElement.client}</div>
                            <div>
                                <div 
                                    className={styles.badge}
                                    style={{
                                        background: projectElement.statusBadgeBackground,
                                        color: projectElement.statusBadgeColor,
                                    }}>{projectElement.status}</div>
                                <div className={styles.badge}>{projectElement.theme}</div>
                                <div className={styles.badge}>{projectElement.category}</div>
                            </div>
                            <div className={styles.description}>{projectElement.description}</div>
                        </div>
                    ))}
                </div>
            </div>
        </Template>
    )
}

export async function getStaticProps() {
    const information = {
        title: "Projetos",
        description: "Projetos em que estou relacionado e seus estados de desenvolvimento"
    }

    let projects = [
        {
            title: 'SMART Event 2.0',
            status: 1,
            client: 0,
            category: 1,
            theme: 0,
            description: 'Sistema de Gestão de Eventos com base em nuvem'
        },
        
        {
            title: 'SISGER',
            status: 2,
            client: 0,
            category: 1,
            theme: 0,
            description: 'Sistema de Gestão de Recursos'
        },
        
        {
            title: 'VAND ERP',
            status: 2,
            client: 2,
            category: 1,
            theme: 0,
            description: 'Sistema de Gestão de Recursos Empresariais'
        },
        
        {
            title: 'VAVEL Chat',
            status: 2,
            client: 1,
            category: 1,
            theme: 0,
            description: 'Sistema de Chat'
        },

        {
            title: 'Roleta Atômica',
            status: 3,
            client: 0,
            category: 0,
            theme: 1,
            description: 'Aplicativo de Quiz'
        },

        {
            title: 'SMART Event 1.0',
            status: 3,
            client: 0,
            category: 1,
            theme: 0,
            description: 'Sistema de Gestão de Eventos'
        },

        {
            title: 'COINTER 2018 Sites',
            status: 4,
            client: 0,
            category: 1,
            theme: 0,
            description: 'Site dos Congressos Internacionais Despertando Vocações (2018)'
        },

        {
            title: 'Sistema de Certificados',
            status: 3,
            client: 0,
            category: 1,
            theme: 0,
            description: 'Sistema de gestão de certificados'
        },

        {
            title: 'Sistema de Associados',
            status: 3,
            client: 0,
            category: 1,
            theme: 0,
            description: 'Sistema de gestão de associados'
        }
    ]

    const clients = {
        0: 'Instituto Internacional Despertando Vocações',
        1: 'VAVEL Media',
        2: 'VAND',
    }

    const status = {
        0: { data: 'Em análise', color: 'blank', background: 'white' },
        1: { data: 'Em desenvolvimento', color: 'white', background: 'green' },
        2: { data: 'Disponível para testes', color: 'white', background: 'blue' },
        3: { data: 'Em produção', color: 'white', background: 'orange' },
        4: { data: 'Finalizado', color: 'black', background: 'rgb(200, 200, 200)' },
    }
    
    const categories = {
        0: 'Aplicativo Mobile',
        1: 'Aplicação Web',
        2: 'Site Institucional',
        3: 'Canal Informativo'
    }

    const themes = {
        0: 'Gestão',
        1: 'Educacional'
    }

    let calculate = {
        projectsByStatus: {},
        projectsByClient: {},
        projectsByCategory: {},
        addToCalculate: function(base, index, item){
            if(!calculate[base][index]){
                calculate[base][index] = [];
            }

            calculate[base][index].push(item);
        }
    }

    projects = projects.map(function (projectElement) {
        let newProjectElement = Object.assign({}, projectElement);

        try {
            newProjectElement.client = clients[projectElement.client];
            newProjectElement.category = categories[projectElement.category];
            newProjectElement.theme = themes[projectElement.theme];

            newProjectElement.status = status[projectElement.status].data;
            newProjectElement.statusBadgeColor = status[projectElement.status].color;
            newProjectElement.statusBadgeBackground = status[projectElement.status].background;
            
            calculate.addToCalculate('projectsByStatus', newProjectElement.client, newProjectElement)
            calculate.addToCalculate('projectsByStatus', newProjectElement.client, newProjectElement)
        } catch (e) {
            console.log("Error in projects rendering");
        }

        return newProjectElement
    })

    return {
        props: {
            projects,
            information
        },
    }
}