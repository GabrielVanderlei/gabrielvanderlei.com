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
                    <input className={styles.longInput} type="text" placeholder="Insert a filter" onChange={(e) => {
                        let value = (e.target.value).toLowerCase();
                        setSelectedProjects(projects.filter((projectContent) => {
                            let projectValues = Object.values(projectContent);
                            let searchPool = (projectValues.join(' ')).toLowerCase();
                            return searchPool.indexOf(value) > -1;
                        }))
                    }} />
                    <p>Currently viewing {selectedProjects.length} project(s)</p>
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
        title: "Projects",
        description: "Projects I am related to and their states of development"
    }

    let projects = [
        
        {
            title: 'SMART Event 2.0',
            status: 1,
            client: 0,
            category: 1,
            theme: 0,
            description: 'Cloud-based Event Management System'
        },
        
        {
            title: 'SISGER',
            status: 3,
            client: 0,
            category: 1,
            theme: 0,
            description: 'International Institute Awakening Vocations Resource Management System'
        },
        
        {
            title: 'VAND ERP',
            status: 2,
            client: 2,
            category: 1,
            theme: 0,
            description: 'Enterprise Resource Planning system'
        },
        
        {
            title: 'VAVEL Chat',
            status: 2,
            client: 1,
            category: 1,
            theme: 0,
            description: 'VAVEL Chat System'
        },

        {
            title: 'Roleta Atômica',
            status: 3,
            client: 0,
            category: 0,
            theme: 1,
            description: 'Educational mobile application focused on questions and answers about fundamental chemistry.'
        },

        {
            title: 'SMART Event 1.0',
            status: 3,
            client: 0,
            category: 1,
            theme: 0,
            description: 'International Awakening Vocations event management system'
        },

        {
            title: 'COINTER 2018 Websites',
            status: 4,
            client: 0,
            category: 1,
            theme: 0,
            description: 'International Congresses Awakening Vocations website (2018)'
        },

        {
            title: 'Sistema de Certificados',
            status: 3,
            client: 0,
            category: 1,
            theme: 0,
            description: 'International Institute Awakening Vocations Certification System'
        },

        {
            title: 'Sistema de Associados',
            status: 3,
            client: 0,
            category: 1,
            theme: 0,
            description: 'International Institute Awakening Vocations Association System'
        },
        
        {
            title: 'Fall Fall',
            status: 3,
            client: 3,
            category: 1,
            theme: 2,
            description: 'Simple game built with HTML5 and CSS3'
        },
        
        {
            title: 'Randomizer',
            status: 3,
            client: 3,
            category: 1,
            theme: 2,
            description: 'Simple random generator app built with HTML5 e CSS3'
        }
    ]

    const clients = {
        0: 'International Institute Awakening Vocations',
        1: 'VAVEL Media',
        2: 'Personal',
        3: 'Personal'
    }

    const status = {
        0: { data: 'In analysis', color: 'blank', background: 'white' },
        1: { data: 'In development', color: 'white', background: 'green' },
        2: { data: 'Available for testing', color: 'white', background: 'blue' },
        3: { data: 'In production enviroment', color: 'white', background: 'orange' },
        4: { data: 'Finished', color: 'black', background: 'rgb(200, 200, 200)' },
    }
    
    const categories = {
        0: 'Mobile Application',
        1: 'Web Application',
        2: 'Institutional Website',
        3: 'Informative'
    }

    const themes = {
        0: 'Management',
        1: 'Education',
        2: 'Entertainment'
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
