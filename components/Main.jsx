import styles from './Main.module.css';

export default function Main({ children }){
    return (
        <>
            <div id="me" className={styles.main}>
                {children}
            </div>
        </>
    )
}