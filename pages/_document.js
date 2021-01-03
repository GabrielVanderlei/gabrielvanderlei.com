import Document, { Html, Head, Main, NextScript } from 'next/document'

class MyDocument extends Document {
  static async getInitialProps(ctx) {
    const initialProps = await Document.getInitialProps(ctx)
    return { ...initialProps }
  }

  render() {
    return (
      <Html>
        <head>
          <Head />
          <script async src="https://www.googletagmanager.com/gtag/js?id=G-K7GL3115G1"></script>
          <script dangerouslySetInnerHTML={{ __html: `window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-K7GL3115G1');
          `}}></script>
          <meta name="vavel-chat-tag" content="5fc1804c146c144e81448caf" />
          <script src="https://chat.vavel.id/lib/chat/5fc1804c146c144e81448caf.js"></script>
        </head>
        <body>
          <Main />
          <NextScript />
        </body>
      </Html>
    )
  }
}

export default MyDocument
