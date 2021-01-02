import Template from '../components/Template'
import styles from './index.module.css'
import Link from 'next/link'

import {
  AiOutlineInstagram,
  AiOutlineLinkedin,
  AiOutlineGithub,
} from 'react-icons/ai'

export default function Home() {
  return (
    <Template 
      title="Gabriel Vanderlei"
      description="Desenvolvedor Full Stack"
    >

      <div className={styles.sideColumn}> 
        <h3>Menu</h3>
        <ul>
          <li><Link href="/#me"><a>Cartão de Visitas</a></Link></li>
          <li><Link href="/#fullstack"><a>Desenvolvedor Full Stack</a></Link></li>
          <li><Link href="/#itcoordinator"><a>Coordenador de Tecnologia da Informação</a></Link></li>
          <li><Link href="/#featured"><a>Projetos em Destaque</a></Link></li>
          <ul>
            <li><Link href="/#featured-raapp"><a>Aplicativo Roleta Atômica</a></Link></li>
            <li><Link href="/#featured-c2018s"><a>Sites do COINTER 2018</a></Link></li>
            <li><Link href="/#featured-iidvs"><a>Site Instituto IDV</a></Link></li>
            <li><Link href="/#featured-siidv"><a>Sistemas do Instituto IDV</a></Link></li>
          </ul>
        </ul>
      </div>
      <div className={styles.mainColumn}>
        <img src="/assets/profile.jpeg" className={styles.img} />
        <h1 className={styles.title}> 
          Desenvolvedor de Software <br />
          <b>e de Hardware</b>

          <br />
          <br />
          <Link href="https://instagram.com/gabriel_vand">
            <a target="_blank" className={styles.link}>
              <AiOutlineInstagram />
            </a>
          </Link>
          <Link href="https://linkedin.com/gabriel-vanderlei">
            <a target="_blank" className={styles.link}>
              <AiOutlineLinkedin />
            </a>
          </Link>
          <Link href="https://github.com/gabrielvanderlei">
            <a target="_blank" className={styles.link}>
              <AiOutlineGithub />
            </a>
          </Link>
        </h1>
        <br />
        <br />

        <div className={styles.information}>
          <div id="fullstack" className={styles.element}>
            <h2>Desenvolvedor Full Stack</h2>
            <p>Desde 2008 estudo as tecnologias Web, seja por alterações em blogs, quanto em projetos de aprendizado. Atualmente desenvolvo em Node.js, PHP utilizando frameworks como AdonisJS e Laravel. Enquanto no front-end utilizo HTML5, CSS3, ES6 utilizando Angular.io, React.js e Vue.js. Atualmente trabalho profissionalmente como desenvolvedor Full Stack.</p>
          </div>
          
          <div id="itcoordinator" className={styles.element}>
            <h2>Coordenador de Tecnologia da Informação</h2>
            <p>Em 2018 comecei a atuar de forma voluntária na área de Tecnologia da Informação do Instituto Internacional Despertando Vocações, onde pude participar da melhoria do design de sites, de sua performance e do desenvolvimento de diversos sistemas. Entre eles o atual sistema de associados, certificados e o utilizado em eventos.</p>
          </div>


          <div id="featured" className={styles.elementWithImages}>
            <h2>Projetos em destaque</h2>
            <br />

            <h3 id="featured-raapp">Aplicativo Roleta Atômica (2018 - 2020)</h3>
            <br />

            <img src="/assets/roleta-atomica.jp2" />
            <p>Aplicativo educativo desenvolvido como parte de um projeto do Programa Internacional Despertando Vocações para Licenciaturas. Atualmente está em manutênção, porém em breve estará novamente disponível para utilização.</p>

            <Link href="https://play.google.com/store/apps/details?id=com.iidv.roleta_atomica&hl=pt_BR"><a target="_blank" className={styles.linkButton}>Acessar Aplicativo na Play Store</a></Link><br />

            <h3 id="featured-c2018s">Sites do Congresso Internacional Despertando Vocações (2018)</h3>
            <br />

            <img src="/assets/cointer-pdvagro.jp2" />
            <img src="/assets/cointer-pdvg.jp2" />
            <img src="/assets/cointer-pdvl.jp2" />
            <p>Sites desenvolvidos com a tecnologia WordPress onde pude utilizar o meu próprio modelo de sites como base, atualmente não é mais o utilizado.</p>

            <h3 id="featured-iidvs">Site do Instituto Internacional Despertando Vocações (2018 - 2020)</h3>
            <br />

            <img src="/assets/institutoidv.jp2" />
            <p>Site desenvolvido com tema próprio para o Instituto Internacional Despertando Vocações com WordPress.</p>
            

            <h3 id="featured-siidv">Sistemas do Instituto Internacional Despertando Vocações (2018 - Atual)</h3>
            <br />

            <img src="/assets/smart-pdvg.jp2" />
            <img src="/assets/smart-pdvl.jp2" />
            <img src="/assets/smart-pdvagro.jp2" />
            <p>Para o Instituto foram desenvolvidos os seguintes sistemas, com um framework próprio e com sistema de pagamentos integrado:</p> 
            
            <ul>
              <li>Sistema de associados</li>
              <li>Sistema de certificados</li>
              <li>Sistema de gestão de eventos</li>
            </ul> 

            <Link href="https://inscricao.cointer-pdvg.com/"><a target="_blank" className={styles.linkButton}>Acessar site do SMART PDVG 2018</a></Link><br />
            <Link href="https://certificados.institutoidv.org/"><a target="_blank" className={styles.linkButton}>Acessar site do sistema de certificados</a></Link><br />
            <Link href="https://associados.institutoidv.org/"><a target="_blank" className={styles.linkButton}>Acessar site do sistema de associados</a></Link>
          </div>
        </div>
      </div>
    </Template>
  )
}
