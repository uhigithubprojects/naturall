<html>
  <head>
    <title>UHI Tunes</title>
    <!-- CSS main stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
  <body>
    <header>
      <h1>UHI Tunes</h1>
    </header>
    <h2>Miracle Security System</h2>

    <h2>Existing User - Please enter your Email address and password</h2>

    <form method="post" action="CheckUser.php">
      <table>
        <tr>
          <td>Email address :</td>
          <td><input type="text" name="Email" size="30" /></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="Password" size="10" /></td>
        </tr>

        <tr>
          <td colspan="2"><input type="submit" value="Check User" /></td>
        </tr>
      </table>
    </form>

    <h2>New users - click button here</h2>
    <form method="LINK" action="RegUser.php">
      <input type="submit" value="Register" />
    </form>
  </body>
  <footer>
    <a
      style="
        background-color: black;
        color: white;
        text-decoration: none;
        padding: 4px 6px;
        font-family: -apple-system, BlinkMacSystemFont, 'San Francisco',
          'Helvetica Neue', Helvetica, Ubuntu, Roboto, Noto, 'Segoe UI', Arial,
          sans-serif;
        font-size: 12px;
        font-weight: bold;
        line-height: 1.2;
        display: inline-block;
        border-radius: 3px;
      "
      href="https://unsplash.com/@iammrcup?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge"
      target="_blank"
      rel="noopener noreferrer"
      title="Download free do whatever you want high-resolution photos from Mr Cup / Fabien Barral"
      ><span style="display: inline-block; padding: 2px 3px"
        ><svg
          xmlns="http://www.w3.org/2000/svg"
          style="
            height: 12px;
            width: auto;
            position: relative;
            vertical-align: middle;
            top: -1px;
            fill: white;
          "
          viewBox="0 0 32 32"
        >
          <title>unsplash-logo</title>
          <path
            d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"
          ></path></svg></span
      ><span style="display: inline-block; padding: 2px 3px"
        >Mr Cup / Fabien Barral</span
      ></a
    >
  </footer>
</html>
