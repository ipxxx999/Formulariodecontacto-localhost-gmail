# Formulario de contacto localhost gmail
Formulario de contacto en localhost para gmail

Puede tener un formulario web en localhost para enviar correos electrónicos con su cuenta de Gmail.
Por Favor lee las instrucciones en la carpeta de ayuda.

5- Ahora puede usar su LocalHost para enviar correos electrónicos desde su servidor local.
Con autenticación de Gmail. No olvide colocar. sus credenciales. en el archivo ( mi-formulario.php )


You can have a web form on localhost to send emails with your Gmail account.
Please read the instructions in the help folder



<h2 id="permitir-aplicaciones-menos-seguras-">Permitir aplicaciones "menos seguras"</h2>
<blockquote>
<p><strong>Importante</strong>: a partir de junio de 2020 Google <a href="https://gsuiteupdates.googleblog.com/2019/12/less-secure-apps-oauth-google-username-password-incorrect.html" target="_blank">no da soporte para aplicaciones menos seguras en G Suite</a>, por lo que si se trata de una cuenta de pago de Google esto no te funcionar&aacute;. De todos modos lo explicado para el env&iacute;o sigue siendo v&aacute;lido para cualquier&nbsp;servidor SMTP que admita usuario y clave, no s&oacute;lo para GMail.</p>
</blockquote>
<p>Este eufemismo es el que utiliza Google para referirse a aplicaciones que, en lugar de usar la API de seguridad de Google y sus <em>tokens</em>, utilizan la vieja pareja "usuario-clave" para acceder al servicio.</p>
<p><h2 id="permitir-aplicaciones-menos-seguras-">Es un ajuste que est&aacute; en la zona de seguridad de tu cuenta de Google,</h2> en la parte de abajo del todo de la secci&oacute;n de autenticaci&oacute;n, pero existe tambi&eacute;n un <a href="https://myaccount.google.com/lesssecureapps" target="_blank">acceso directo a este ajuste</a> en exclusiva:</p>
<p style="text-align: center;"><img src="https://camo.githubusercontent.com/474562db8cfd235737915925e40f6e28b8c7b53a/68747470733a2f2f7777772e63616d7075736d76702e65732f7265637572736f732f696d6167652e6178643f706963747572653d2f323031372f33542f476f6f676c652d5365677572696461642d417070732d4d656e6f732d536567757261732e706e67" alt="Interfaz de selecci&oacute;n para permitir aplicaciones menos seguras" width="775" height="338" /></p><blockquote>
<p>Si no lo marcas, cuando intentes enviar correo a trav&eacute;s del servidor SMTP de GMail obtendr&aacute;s el error:</p>
