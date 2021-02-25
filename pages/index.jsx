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
      description="Full Stack Developer"
    >

      <div className={styles.sideColumn}> 
        <h3>Menu</h3>
        <ul>
          <li><Link href="/#me"><a>Business Card</a></Link></li>
          <li><Link href="/#fullstack"><a>Full Stack Developer</a></Link></li>
          <li><Link href="/#itcoordinator"><a>Technology Information Coordinator</a></Link></li>
          <li><Link href="/#featured"><a>Featured Projects</a></Link></li>
          <ul>
            <li><Link href="/#featured-minhastack"><a>"Minha Stack"</a></Link></li>
            <li><Link href="/#featured-raapp"><a>Atomic Roulette Mobile Application</a></Link></li>
            <li><Link href="/#featured-siidv"><a>International Awakening Vocations Systems and Websites</a></Link></li>
          </ul>
        </ul>
      </div>
      <div className={styles.mainColumn}>
        <img src="/assets/profile.jpeg" className={styles.img} />
        <h1 className={styles.title}> 
          Software and Hardware developer <br />
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
            <h2>Full Stack developer</h2>
            <p>Since 2008 I study web technologies, from blog alterations to learning and professional projects. 
              About technology stack I work in backend with Node.js (Adonis.js, Express.js), PHP (Laravel) and Java (Spring Boot), in frontend with React.js, Angular.js, Vue.js, in mobile React Native and in cloud computing using AWS technologies. </p>
          </div>
          
          <div id="itcoordinator" className={styles.element}>
            <h2>Information Coordinator Technology</h2>
            <p>In 2018 I started to work voluntarily in the Information Technology area of the Instituto Internacional Despertando Vocações, where I was able to participate in improving the design of websites, their performance and the development of various systems. Among them the current system of members, certificates and the one used in events.</p>
          </div>


          <div id="featured" className={styles.elementWithImages}>
            <h2>Featured Projects</h2>
            <br />

            <h3 id="featured-minhastack">Minha Stack (2020 - Nowadays)</h3>
            <br />
            <p>Educational project about development, coding and tech skills.</p>
            <Link href="https://minhastack.com/"><a target="_blank" className={styles.linkButton}>Acess website</a></Link><br />

            <h3 id="featured-raapp">Atomic Roulette Mobile Application (2018 - Nowadays)</h3>
            <br />

            <img src="/assets/roleta-atomica.jp2" />
            <p>Educational application developed as part of a project of the International Program Awakening Vocations for Undergraduate Programs. It is currently in maintenance, but will soon be available for use again.</p>

            <Link href="https://play.google.com/store/apps/details?id=com.iidv.roleta_atomica&hl=pt_BR"><a target="_blank" className={styles.linkButton}>Acess in Play Store</a></Link><br />

            <h3 id="featured-siidv">International Institute Awakening Vocations Systems (2018 - Nowadays)</h3>
            <br />

            <img src="/assets/smart-pdvg.jp2" />
            <img src="/assets/smart-pdvl.jp2" />
            <img src="/assets/smart-pdvagro.jp2" />
            <p>For the Institute, the following systems were developed, with their own framework and integrated payment system:</p> 
            
            <ul>
              <li>Association System</li>
              <li>Certificate System</li>
              <li>Event System</li>
            </ul> 

            <Link href="https://inscricao.cointer-pdvg.com/"><a target="_blank" className={styles.linkButton}>Acess Event System Website (Event: COINTER PDVG 2018)</a></Link><br />
            <Link href="https://certificados.institutoidv.org/"><a target="_blank" className={styles.linkButton}>Acess Association Certificate Website</a></Link><br />
            <Link href="https://associados.institutoidv.org/"><a target="_blank" className={styles.linkButton}>Acess Association System Website</a></Link>
            

            <h3 id="featured-iidvs">International Institute Awakening Vocations Website (2018 - 2020)</h3>
            <br />
            <img src="/assets/institutoidv.jp2" />
            <p>Site developed with its own theme for the International Institute Awakening Vocations with WordPress.</p>

            <h3 id="featured-c2018s">International Awakening Vocations Websites (2018)</h3>
              <br />

              <img src="/assets/cointer-pdvagro.jp2" />
              <img src="/assets/cointer-pdvg.jp2" />
              <img src="/assets/cointer-pdvl.jp2" />
              <p>Sites developed with WordPress technology where I was able to use my own website template as a base.</p>
          </div>
        </div>
      </div>
    </Template>
  )
}
