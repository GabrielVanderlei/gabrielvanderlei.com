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
          <meta name="vavel-chat-tag" content="5fc1804c146c144e81448caf" />
          <script src="http://chat.vavel.id/lib/chat/5fc1804c146c144e81448caf.js"></script>
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