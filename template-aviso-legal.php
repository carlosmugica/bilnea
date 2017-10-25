<?php

/* Template Name: bilnea | Aviso legal */

get_header();

?>

<div id="primary" class="main-row">
	<div id="content" role="main" class="span8 offset2">

		<?php

		if (have_posts()) {
			while (have_posts()) {
				the_post();

				?>

				<article class="post">
					<div class="the-content">
						<div class="container">
							<div class="legal">
								<h3>Datos identificativos del titular del sitio web</h3>
								<p>En cumplimiento del deber de información estipulado en el artículo 10 de la Ley 34/2002 de 11 de julio de Servicios de la Sociedad de la Información y de Comercio Electrónico, <?= b_f_option('user_name') ?> y en calidad de titular del web site <?= str_replace('http://', '', get_site_url()) ?> procede a comunicarles los datos identificativos exigidos por la referida norma.</p>
								<ul>
								<li>Denominación social: <?= b_f_option('user_name') ?></li>
								<li>Domicilio social: <?= b_f_option('user_address') ?></li>
								<li>CIF: <?= b_f_option('user_cif') ?></li>
								<li>Dirección de correo electrónico: <a href="mailto:<?= b_f_option('user_email') ?>" title="Correo electrónico"><?= b_f_option('user_email') ?></a></li>
								<li>Teléfono: <a href="tel://<?= b_f_option('user_phone') ?>" title="Teléfono"><?= b_f_option('user_phone') ?></a></li>
								</ul>
								<p>La presente información conforma y regula las condiciones de uso, las limitaciones de responsabilidad y las obligaciones que, los usuarios de la página Web que se publica bajo el nombre de dominio <?= str_replace('http://', '', get_site_url()) ?> asumen y se comprometen a respetar.</p>
								<h3>Definiciones</h3>
								<p><em>Página</em>, dominio <?= str_replace('http://', '', get_site_url()) ?> que se pone a disposición de los Usuarios de Internet.</p>
								<p><em>Usuario</em>, persona física o jurídica que utiliza o navega por la Página.</p>
								<p><em>Contenido</em>, son las páginas que conforman la totalidad del dominio <?= str_replace('http://', '', get_site_url()) ?> las cuales conforman la información y los servicios que <?= b_f_option('user_name') ?> pone a disposición de los Usuarios de Internet. En ellas se contienen los mensajes, textos, fotografías, gráficos, iconos, logos, tecnología, links, texturas, dibujos, archivos de sonido y/o imagen, grabaciones, software, aspecto, diseño gráfico y códigos fuente y, en general, cualquier clase de material contenido en la Página.</p>
								<p><em>Web</em>, palabra técnica que describe el sistema de acceso a la información vía Internet, que se configura por medio de páginas confeccionadas con lenguaje HTML o similar, y mecanismos de programación tales como java, javascript, PHP, u otros, etc. En estas páginas diseñadas y publicadas bajo un nombre de dominio Internet son el resultado de la información que el titular pone a disposición de los Usuarios de Internet.</p>
								<p><em>Hiperenlace</em>, técnica por la cual un Usuario puede navegar por diferentes páginas de la Web, o por Internet, con un simple click sobre el texto, icono, botón o indicativo que contiene el enlace.</p>
								<p><em>Cookies</em>, medio técnico para la "trazabilidad" y seguimiento de la navegación en los sitios Web. Son pequeños ficheros de texto que se escriben en el ordenador del Usuario. Este método tiene implicaciones sobre la privacidad, por lo que <?= b_f_option('user_name') ?> avisará oportuna y fehacientemente de su utilización en el momento en que se implanten en la Página.</p>
								<h3>Condiciones de uso</h3>
								<p>La simple y mera utilización de la Página otorga la condición de usuario de la Página, bien sea persona física o jurídica, y obligatoriamente implica la aceptación completa, plena y sin reservas de todas y cada una de las cláusulas y condiciones generales incluidas en el Aviso Legal. Si el Usuario no estuviera conforme con las cláusulas y condiciones de uso de este Aviso Legal, se abstendrá de utilizar la Página.</p>
								<p>Este Aviso Legal está sujeto a cambios y actualizaciones por lo que la versión publicada por <?= b_f_option('user_name') ?> puede ser diferente en cada momento en que el Usuario acceda al Portal. Por tanto, el Usuario debe leer el Aviso Legal en todas y cada una de las ocasiones en que acceda a la Página.</p>
								<p>A través de la Página, <?= b_f_option('user_name') ?> facilita a los Usuarios el acceso y la utilización de diversos Contenidos publicados por medio de Internet por <?= b_f_option('user_name') ?> o por terceros autorizados.</p>
								<p>El Usuario esta obligado y se compromete a utilizar la Página y los Contenidos de conformidad con la legislación vigente, el Aviso Legal, y cualquier otro aviso o instrucciones puestos en su conocimiento, bien sea por medio de este aviso legal o en cualquier otro lugar dentro de los Contenidos que conforman la Página, así como con las normas de convivencia, la moral y buenas costumbres generalmente aceptadas.</p>
								<p>A tal efecto, el Usuario se obliga y compromete a NO utilizar cualquiera de los Contenidos con fines o efectos ilícitos, prohibidos en el Aviso Legal o por la legislación vigente, lesivos de los derechos e intereses de terceros, o que de cualquier forma puedan dañar, inutilizar, sobrecargar, deteriorar o impedir la normal utilización de los Contenidos, los equipos informáticos o los documentos, archivos y toda clase de contenidos almacenados en cualquier equipo informático propios o contratados por <?= b_f_option('user_name') ?>, de otros Usuarios o de cualquier usuario de Internet (hardware y software).</p>
								<p>El Usuario se obliga y se compromete a no transmitir, difundir o poner a disposición de terceros cualquier clase de material contenido en la Página, tales como informaciones, textos, datos, contenidos, mensajes, gráficos, dibujos, archivos de sonido y/o imagen, fotografías, grabaciones, software, logotipos, marcas, iconos, tecnología, fotografías, software, enlaces, diseño gráfico y códigos fuente, o cualquier otro material al que tuviera acceso en su condición de Usuario de la Página, sin que esta enumeración tenga carácter limitativo.</p>
								<p>Asimismo, de conformidad con todo ello, el Usuario no podrá:</p>
								<ul>
								<li>Reproducir, copiar, distribuir, poner a disposición o de cualquier otra forma comunicar públicamente, transformar o modificar los Contenidos, a menos que se cuente con la autorización escrita y explícita de <?= b_f_option('user_name') ?>, que es titular de los correspondientes derechos, o bien que ello resulte legalmente permitido.</li>
								<li>Suprimir, manipular o de cualquier forma alterar el "copyright" y demás datos identificativos de la reserva de derechos de <?= b_f_option('user_name') ?> o de sus titulares, de las huellas y/o identificadores digitales, o de cualesquiera otros medios técnicos establecidos para su reconocimiento.</li>
								<li>El Usuario deberá abstenerse de obtener e incluso de intentar obtener los Contenidos empleando para ello medios o procedimientos distintos de los que, según los casos, se hayan puesto a su disposición a este efecto o se hayan indicado a este efecto en las páginas Web donde se encuentren los Contenidos o, en general, de los que se empleen habitualmente en Internet a este efecto siempre que no entrañen un riesgo de daño o inutilización de la Página, y/o de los Contenidos.</li>
								</ul>
								<h3>Propiedad intelectual</h3>
								<p>Todas las marcas, nombres comerciales o signos distintivos de cualquier clase que aparecen en la Página son propiedad de <?= b_f_option('user_name') ?> o, en su caso, de terceros que han autorizado su uso, sin que pueda entenderse que el uso o acceso al Portal y/o a los Contenidos atribuya al Usuario derecho alguno sobre las citadas marcas, nombres comerciales y/o signos distintivos, y sin que puedan entenderse cedidos al Usuario, ninguno de los derechos de explotación que existen o puedan existir sobre dichos Contenidos.</p>
								<p>De igual modo los Contenidos son propiedad intelectual de <?= b_f_option('user_name') ?> o de terceros en su caso, por tanto, los derechos de Propiedad Intelectual son titularidad de <?= b_f_option('user_name') ?> o de terceros que han autorizado su uso, a quienes corresponde el ejercicio exclusivo de los derechos de explotación de los mismos en cualquier forma y, en especial, los derechos de reproducción, distribución, comunicación pública y transformación.</p>
								<p>La utilización no autorizada de la información contenida en esta Web, así como la lesión de los derechos de Propiedad Intelectual o Industrial de <?= b_f_option('user_name') ?> o de terceros incluidos en la Página que hayan cedido contenidos dará lugar a las responsabilidades legalmente establecidas.</p>
								<h3>Hiperenlaces</h3>
								<p>Aquellas personas que se propongan establecer hiperenlaces entre su página Web y la Página deberán observar y cumplir las condiciones siguientes:</p>
								<ul>
								<li>No será necesaria autorización previa cuando el Hiperenlace permita únicamente el acceso a la página de inicio, pero no podrá reproducirla de ninguna forma. Cualquier otra forma de Hiperenlace requerirá la autorización expresa e inequívoca por escrito por parte de <?= b_f_option('user_name') ?> </li>
								<li>No se crearán "marcos" ("frames") con las páginas Web ni sobre las páginas Web de <?= b_f_option('user_name') ?></li>
								<li>No se realizarán manifestaciones o indicaciones falsas, inexactas, u ofensivas sobre <?= b_f_option('user_name') ?>, sus directivos, sus empleados o colaboradores, o de las personas que se relacionen en la Página por cualquier motivo, o de los Usuarios de las Página, o de los Contenidos suministrados.</li>
								<li>No se declarará ni se dará a entender que <?= b_f_option('user_name') ?> ha autorizado el Hiperenlace o que ha supervisado o asumido de cualquier forma los Contenidos ofrecidos o puestos a disposición de la página Web en la que se establece el Hiperenlace.</li>
								<li>La página Web en la que se establezca el Hiperenlace solo podrá contener lo estrictamente necesario para identificar el destino del Hiperenlace.</li>
								<li>La página Web en la que se establezca el Hiperenlace no contendrá informaciones o contenidos ilícitos, contrarios a la moral y a las buenas costumbres generalmente aceptadas y al orden público, así como tampoco contendrá contenidos contrarios a cualesquiera derechos de terceros.</li>
								</ul>
								<h3>Cookies</h3>
								<p>Las cookies son el medio técnico para la "trazabilidad" y seguimiento de la navegación en los Sitios Web. Son pequeños ficheros de texto que se escriben en el ordenador del Usuario. Este método tiene implicaciones sobre la privacidad, por lo que <?= b_f_option('user_name') ?> informa de que podrá utilizar cookies con la finalidad de elaborar estadísticas de utilización del sitio web así como para identificar el PC del Usuario permitiendo reconocerle en sus próximas visitas. En todo caso, el usuario puede configurar su navegador para no permitir el uso de cookies en sus visitas al web site.</p>
								<h3>Disponibilidad de la Página</h3>
								<p><?= b_f_option('user_name') ?> no garantiza la inexistencia de interrupciones o errores en el acceso a la Página, a sus Contenidos, ni que éste se encuentren actualizados, aunque desarrollará sus mejores esfuerzos para, en su caso, evitarlos, subsanarlos o actualizarlos. Por consiguiente, <?= b_f_option('user_name') ?> no se responsabiliza de los daños o perjuicios de cualquier tipo producidos en el Usuario que traigan causa de fallos o desconexiones en las redes de telecomunicaciones que produzcan la suspensión, cancelación o interrupción del servicio del Portal durante la prestación del mismo o con carácter previo.</p>
								<p><?= b_f_option('user_name') ?> excluye, con las excepciones contempladas en la legislación vigente, cualquier responsabilidad por los daños y perjuicios de toda naturaleza que puedan deberse a la falta de disponibilidad, continuidad o calidad del funcionamiento de la Página y de los Contenidos, al no cumplimiento de la expectativa de utilidad que los usuarios hubieren podido atribuir a la Página y a los Contenidos.</p>
								<p>La función de los Hiperenlaces que aparecen en esta Web es exclusivamente la de informar al usuario acerca de la existencia de otras Web que contienen información sobre la materia. Dichos Hiperenlaces no constituyen sugerencia ni recomendación alguna.</p>
								<p><?= b_f_option('user_name') ?> no se hace responsable de los contenidos de dichas páginas enlazadas, del funcionamiento o utilidad de los Hiperenlaces ni del resultado de dichos enlaces, ni garantiza la ausencia de virus u otros elementos en los mismos que puedan producir alteraciones en el sistema informático (hardware y software), los documentos o los ficheros del usuario, excluyendo cualquier responsabilidad por los daños de cualquier clase causados al usuario por este motivo.</p>
								<p>El acceso a la Página no implica la obligación por parte de <?= b_f_option('user_name') ?> de controlar la ausencia de virus, gusanos o cualquier otro elemento informático dañino. Corresponde al Usuario, en todo caso, la disponibilidad de herramientas adecuadas para la detección y desinfección de programas informáticos dañinos, por lo tanto, <?= b_f_option('user_name') ?> no se hace responsable de los posibles errores de seguridad que se puedan producir durante la prestación del servicio de la Página, ni de los posibles daños que puedan causarse al sistema informático del usuario o de terceros (hardware y software), los ficheros o documentos almacenados en el mismo, como consecuencia de la presencia de virus en el ordenador del usuario utilizado para la conexión a los servicios y contenidos de la Web, de un mal funcionamiento del navegador o del uso de versiones no actualizadas del mismo.</p>
								<h3>Calidad de la Página</h3>
								<p>Dado el entorno dinámico y cambiante de la información y servicios que se suministran por medio de la Página, <?= b_f_option('user_name') ?> realiza su mejor esfuerzo, pero no garantiza la completa veracidad, exactitud, fiabilidad, utilidad y/o actualidad de los Contenidos.</p>
								<p>La información contenida en las páginas que componen este Portal sólo tiene carácter informativo, consultivo, divulgativo y publicitario. En ningún caso ofrecen ni tienen carácter de compromiso vinculante o contractual.</p>
								<h3>Notificaciones</h3>
								<p>Todas las notificaciones y comunicaciones por parte de <?= b_f_option('user_name') ?> al Usuario realizados por cualquier medio se considerarán eficaces a todos los efectos.</p>
								<h3>Disponibilidad de los Contenidos</h3>
								<p>La prestación del servicio de la Página y de los Contenidos tiene, en principio, duración indefinida. <?= b_f_option('user_name') ?> no obstante, queda autorizada para dar por terminada o suspender la prestación del servicio de la Página y/o de cualquiera de los Contenidos en cualquier momento. Cuando ello sea razonablemente posible, <?= b_f_option('user_name') ?>  advertirá previamente la terminación o suspensión de la Página.</p>
								<h3>Protección de datos de Carácter Personal</h3>
								<p><?= b_f_option('user_name') ?> es consciente de la importancia de la privacidad de los datos de carácter personal y por ello, ha implementado una política de tratamiento de datos orientada a proveer la máxima seguridad en el uso y recogida de los mismos, garantizando el cumplimiento de la normativa vigente en la materia y configurando dicha política como uno de los pilares básicos en las líneas de actuación de la entidad.</p>
								<p>Durante la navegación a través de la web <?= str_replace('http://', '', get_site_url()) ?> es posible que se soliciten datos de carácter personal a través de diferentes formularios dispuestos al efecto. Dichos datos formarán parte de los pertinentes ficheros en función de la finalidad determinada y concreta que motiva el recabo de los mismos.</p>
								<p>De esta forma, la información particular de cada tratamiento de datos se aportará junto a cada formulario web, siendo común a todos ellos el responsable del fichero: <?= b_f_option('user_name') ?>  domiciliado en <?= b_f_option('user_address') ?> así como el lugar y forma de ejercicio de los derechos de acceso, rectificación, cancelación y oposición, que deberá formalizarse mediante una comunicación escrita a la dirección indicada anteriormente incluyendo copia del DNI o documento identificativo equivalente.</p>
								<p>En el supuesto de que aporte sus datos a través de un mensaje de correo electrónico, el mismo formará parte de un fichero cuya finalidad será la gestión de la solicitud o comentario que nos realiza, siendo aplicables el resto de extremos indicados en el párrafo anterior.</p>
								<p>Asimismo, las condiciones generales de contratación de los servicios de <?= b_f_option('user_name') ?> contienen las características y naturaleza del tratamiento de los datos que serán desarrollados por la misma en el supuesto de que contrate cualquiera de ellos.</p>
								<p>Por otro lado, <?= b_f_option('user_name') ?> ha implantado las medidas técnicas y organizativas necesarias para evitar la pérdida, mal uso, alteración, acceso no autorizado y robo de los Datos Personales que los interesados pudieran facilitar como consecuencia del acceso a las diferentes secciones del website <?= str_replace('http://', '', get_site_url()) ?>, aplicando las medidas de seguridad contempladas en el Real Decreto 1720/2007, de 21 de diciembre, por el que se aprueba el Reglamento de desarrollo de la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal.</p>
								<p>Para ejecutar sus derechos puede enviar un correo a la dirección <a href="mailto:<?= b_f_option('user_email') ?>" title="Correo electrónico"><?= b_f_option('user_email') ?></a></p>
								<h3>Jurisdicción</h3>
								<p>Para cuantas cuestiones se susciten sobre la interpretación, aplicación y cumplimiento de este Aviso Legal, así como de las reclamaciones que puedan derivarse de su uso, todos las partes intervinientes se someten a los Jueces y Tribunales de Murcia, renunciando de forma expresa a cualquier otro fuero que pudiera corresponderles.</p>
								<h3>Legislación aplicable</h3>
								<p>Las partes se someten, a su elección, para la resolución de los conflictos y con renuncia a cualquier otro fuero, a los juzgados y tribunales del domicilio del usuario.</p>
								<p></p>
								<p>© <?= date("Y") ?> <?= b_f_option('user_name') ?>  Reservados todos los derechos de autor por las leyes y tratados internacionales de propiedad intelectual. Queda expresamente prohibida su copia, reproducción o difusión, total o parcial, por cualquier medio.</p>
							</div>

						</div>
					</div>
				</article>

			<?php

			}
		}

		?>

	</div>
</div>

<?php

get_footer();

?>
