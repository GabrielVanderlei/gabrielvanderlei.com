import Head from "next/head";
import Footer from "./Footer";
import Header from "./Header";
import Main from "./Main";

export default function Template({title, description='Full Stack Developer', children}){
    return (
        <>
            <Head>
                <title>{title}</title>
                <meta name="description" content={description} />
                <link rel="icon" href="/favicon.ico" />
            </Head>

            <Header />
            <Main>
                {children}
            </Main>
            <Footer />
        </>
    )
}