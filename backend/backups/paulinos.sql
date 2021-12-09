-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2020 a las 16:47:26
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paulinos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eco`
--

CREATE TABLE `eco` (
  `Id_Eco` int(11) NOT NULL,
  `Texto` text NOT NULL,
  `Imagenes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eco`
--

INSERT INTO `eco` (`Id_Eco`, `Texto`, `Imagenes`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `Id_Estado` int(11) NOT NULL,
  `Estado` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`Id_Estado`, `Estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evangelio`
--

CREATE TABLE `evangelio` (
  `ID` int(11) NOT NULL,
  `Evangelio` text NOT NULL,
  `Titulo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evangelio`
--

INSERT INTO `evangelio` (`ID`, `Evangelio`, `Titulo`) VALUES
(1, 'En aquellos días, todavía de noche se levantó Jacob, tomó a las dos mujeres, las dos siervas y los once hijos y cruzó el vado de Yaboc; pasó con ellos el torrente e hizo pasar sus posesiones. Y él quedó solo. Un hombre luchó con él hasta la aurora; y, viendo que no le podía, le tocó la articulación del muslo y se la dejó tiesa, mientras peleaba con él. Dijo: «Suéltame, que llega la aurora.» Respondió: «No te soltaré hasta que me bendigas.» Y le preguntó: «¿Cómo te llamas?» Contestó: «Jacob.» Le replicó: «Ya no te llamarás Jacob, sino Israel, porque has luchado con dioses y con hombres y has podido.» Jacob, a su vez, preguntó: «Dime tu nombre.» Respondió: «¿Por qué me preguntas mi nombre?» Y le bendijo. Jacob llamó aquel lugar Penuel, diciendo: «He visto a Dios cara a cara y he quedado vivo.» Mientras atravesaba Penuel salía el sol, y él iba cojeando. Por eso los israelitas, hasta hoy, no comen el tendón de la articulación del muslo, porque Jacob fue herido en dicho tendón del muslo.\n\nPalabra de Dios.', 'Lectura del libro del Génesis (32,22-32)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `Id_Historial` int(11) NOT NULL,
  `Pais` text NOT NULL,
  `Texto` text NOT NULL,
  `Imagenes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`Id_Historial`, `Pais`, `Texto`, `Imagenes`) VALUES
(1, 'Guatemala', '¡Nuestra Realidad!\n\nEl Seminario La Milagrosa, es una casa de formación comprendida por las etapas de Propedéutico y Filosofía, donde son formados los futuros misioneros vicentinos (Congregación de la Misión), en diversas áreas como lo son las dimensiones propias del Eje Vicentino: espiritual, intelectual, comunitaria, humana y apostólica. \nEs acá donde los candidatos van madurando su llamado vocacional en pos de la evangelización de los pobres, que a la vez les permite entrar en contacto directo con la espiritualidad propia del Carisma. Contamos con presencia en toda Centroamérica, asimismo nuestros estudiantes proceden de los diversos países del istmo, siendo este año 2020 conformado por las nacionales de: Guatemala, El Salvador, Honduras, Nicaragua y Panamá.\nLas dimensiones que propician la formación de los estudiantes radican en el compromiso personal ante Dios y la comunidad, por lo tanto el candidato va recibiendo las herramientas necesarias para irse desenvolviendo en las diversas áreas que deben ser asumidas y trabajadas, siendo así, la formación académica se divide en 2 etapas Propedéutico, etapa inicial donde los candidatos reciben formación en CONFREGUA (Conferencia de Religiosos en Guatemala), introduciéndose a temas generales con respecto a la Fe, la misión , la Iglesia y su magisterio, luego se recibe los estudios de Filosofía en la Universidad Rafael Landívar (URL), donde los estudiantes reciben los conocimientos propios del pensamiento crítico y emancipador de la filosofía, carrera necesaria para la formación eclesial de los misioneros.\nEn ámbitos apostólicos trabajamos en conjunto a la Familia Vicentina, por medio de servicios caritativos, así como las santas misiones populares que se realizan en Semana Santa y fin de año, también se comparten formaciones propicias para los diversos servicios que presta la FamVi y durante el transcurso del año se acompaña pastoralmente a comunidades de las parroquias atendidas por misioneros vicentinos, siendo estas: Parroquia El Señor de las Misericordias (zona 1 y 3 ) y la Parroquia San Vicente de Paúl, Bethania (zona 7).\nAnte la actual crisis que se atraviesa debido a la pandemia COVID-19, se ha adquirido una nueva pastoral, un servicio virtual, apostolado que dimos inicio en el mes de marzo con las transmisiones de las santas eucaristías dominicales y semanales, así como los ejercicios de piedad propios de la Cuaresma, teniendo un contacto un poco más cercano con nuestras comunidades pese al confinamiento, por otra parte, la parroquia El Señor de las Misericordias emprendió un proyecto para ayudar a las familias más afectadas por esta situación, familias de su jurisdicción parroquial, a quienes de manera semanal se apoyó con víveres, los cuales eran adquiridos por donaciones recibidas, creando así un centro de acopio, donde era atendido por comunidades de la parroquia y el seminarios.', 'Images/DefaultImages/Guatemala.png'),
(4, 'El Salvador', 'La Congregación de la Misión ha tenido presencia en Centro América desde el año 1862. Sin embargo, su llegada a El Salvador fue a petición de Mons. Cárcamo y a la expulsión de los Padres Capuchinos y de la Compañía de Jesús el 21 de julio 1872. \n\nMons. Cárcamo no quería dejar interrumpida la labor misionera en las parroquias, debido a que los párrocos visitaban muy poco las comunidades y centraban su atención en la zona urbana. Su solicitud fue enviada al P. Gustavo Foing C.M., visitador de la Provincia de América Central con sede en Colombia.\n\nLa respuesta llegó el 3 de diciembre de 1879 con la llegada de los misioneros: \n●	P. Vaysse C.M. \n●	Julio Pineda C.M. ', 'Images/DefaultImages/ElSalvador.png'),
(5, 'Nicaragua', 'La presencia de los misioneros vicentinos en Nicaragua fue a partir de 1935, por parte de la Provincia de México. Los misioneros atendían el templo de la Recolección, sin embargo, debido a situaciones geográficas, la Provincia de América Central toma posesión del lugar en 1956 a petición de la Provincia de México.\n\nEl P. Leovigildo López Fitoria C.M., nicaragüense, pertenecía a la Provincia de México y se adscribe a la de América Central, lo cual le permitió seguir atendiendo la misión encomendada y ser el primer misionero de la Provincia de América Central en Nicaragua. Después fue enviado el P. Gonzalo Orellana Recinos C.M.\nEn 1973 llega a León el P. José Domingo Segura Madrid C.M. a quien el Obispo de León Monseñor Julián Barni, nombró asesor de los miembros de la Renovación Carismática. Desde la casa de la Recolección, el P. Segura C.M. atendió las parroquias de la Ermita de la Virgen y la de Malpaisillo. \nPosteriormente acompañaron al P. Segura los misioneros: P. José Ricardo Ortíz C.M., P. Gonzalo Orellana Recinos C.M., P. Godofredo Recinos C.M. y el Hno. Marcelino Batres C.M.', 'Images/DefaultImages/Nicaragua.png'),
(6, 'Panamá', 'La Congregación de la Misión se hizo presente en Panamá en 1875, a través del P. Felipe González C.M., quien acompañaba a las Hijas de la Caridad en la fundación. A mediados de 1876 Mons. Ignacio Antonio Parra entregó a la Congregación de la Misión la Iglesia de San Felipe Neri en lo que actualmente es Casco Antiguo. En 1877 llega el P. Tomás Gugnon C.M. y en 1882, el P. José Vaysse C.M. \nEn 1903, Panamá se independizó de la gran Colombia, con motivo de la construcción del canal interoceánico. Con la compra de la zona del canal por el gobierno americano, y con motivo de la llegada de miles de trabajadores norteamericanos, se hizo indispensable la presencia de sacerdotes de habla inglesa. El primer enviado fue el P. Guillermo Rojas Arrieta C.M., misionero políglota, quien llegó a ser Obispo de Panamá (1912-1925) y primer arzobispo (1925-1933). En 1910, el Padre Tomás y Mac’Donanld C.M. (perteneciente a la Provincia del Este de Estado Unidos) se une a la misión y, en menos de tres meses después de su llegada, estaba a su cargo toda la zona del canal. A partir de ello emprendieron la construcción de una serie de iglesias, con lo cual el ministerio de los misioneros entre los trabajadores del canal americano, se extendió luego a los trabajadores de color católicos. También atendieron en los bananales de la compañía frutera estadounidense. En septiembre de 1913, la Provincia del Este se hizo cargo de la obra.\nA finales de 1957 y a petición de algunos padres de familia, se inician las gestiones para fundar una escuela. El alma de dicha iniciativa era el P. Teodoro Kint C.M., quien llegó de Holanda a Panamá en 1954; contó con la ayuda de muchas familias y personajes como la maestra jubilada Eusebia Medina, Profa. Nidia Medina de Quintero, Licda. Berenice Ruiz.  \n\nPor conducto del Dr. Alfredo Cantón, el 11 de abril de 1958 fue solicitado al Ministerio de Educación el permiso para ejecutar la apertura del “Colegio San Vicente de Paúl” (CSVP). El 18 de abril se obtuvo una respuesta afirmativa, por medio del oficio número 108 de la Dirección Particular. El 18 de julio de 1958, por medio del Resuelto No. 436 fue aprobado el funcionamiento de la sección Primaria del “Colegio San Vicente de Paúl”, por el Viceministro de Educación, Lic. Carlos Sucre C.   \n\nEl CSVP, dio inicio a sus labores educativas el 5 de mayo de 1958. El Kínder, estaba a cargo de la maestra Ubaldina Sandoval. La inauguración del plantel fue el día 19 de julio de 1958, y estuvo a cargo del Visitador de la Provincia de América Central, P. José Eduardo Álvarez C.M., con la presencia de los padres: Teodoro Kint C.M., Christian Muiser C.M. y Francisco Sáenz C.M., contando además con un gran número de invitados. Se escogió este día, por celebrarse la fiesta de San Vicente de Paúl.', 'Images/DefaultImages/Panama.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mariologia`
--

CREATE TABLE `mariologia` (
  `Id_Mariologia` int(11) NOT NULL,
  `Texto` text NOT NULL,
  `Imagenes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mariologia`
--

INSERT INTO `mariologia` (`Id_Mariologia`, `Texto`, `Imagenes`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Images/DefaultImages/Maria.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mision`
--

CREATE TABLE `mision` (
  `Id_Mision` int(11) NOT NULL,
  `Texto` text NOT NULL,
  `Imagenes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mision`
--

INSERT INTO `mision` (`Id_Mision`, `Texto`, `Imagenes`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Images/DefaultImages/mision.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `Id_Publicacion` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Cuerpo` text NOT NULL,
  `Imagenes` varchar(500) NOT NULL,
  `Estado` int(11) NOT NULL DEFAULT 1,
  `Seccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`Id_Publicacion`, `Id_Usuario`, `Titulo`, `Cuerpo`, `Imagenes`, `Estado`, `Seccion`) VALUES
(3, 15, 'Taxista es despedido por negarse a llevar a una mujer embarazada a clínica abortiva', 'Este hombre fue despedido de inmediato cuando sus superiores se enteraron del caso, la muchacha justificó su acción diciendo a través de redes sociales que no estaba en condiciones de cuidar a un niño, «Tengo 20 años y descubrí­ que estaba embarazada y luego decidí que querí­a un aborto porque no estoy en condiciones de cuidar a un niño», escribió en Reddit.\n\nEse día, cuando la chica abordó el vehí­culo hacia la clínica de abortos que se encontraba a una hora de distancia, la estudiante dijo que el conductor parecía incómodo con la dirección hacia donde se dirigían pues después de preguntarle varias veces si realmente se practicaría un aborto, el hombre intentó disuadirla de su errónea decisión.\n', 'Images/ImagesPosts/taxista.jpg', 2, 'Obras'),
(4, 15, 'Impactantes palabras de Julio Melgar antes de morir', 'Tuve el privilegio de poder cuidarlo los últimos 18 dí­as de su vida. Tuve el privilegio del cielo de oí­rlo profetizarle a la gente que llegaba a verlo y salía la gente llorando de ahí. Tuve el privilegio de verlo los últimos 15 minutos conscientes de este hombre, pero ¿sabe qué hizo? le profetizó a un pastor que acababa de aterrizar en Estados Unidos y que me dijo que ya estaba ahí. Le profetizó a él y a su esposa y ellos lloraban, luego me dijo pásame a mi cama, lo pasamos con el pastor y lo acostamos y fue lo último que se supo consciente de nuestro amado Julio dijo el pastor a la audiencia en el funeral.\n\nTambién dijo: «Eso es terminar la carrera con gozo, eso es terminar vací­os. ¿Sabe por qué estamos tantas personas acá? y miles que estuvieron anoche y todas estas personas que están pendientes de esto? porque la idea de la vida es terminar vací­os, vaciarnos de aquello que tenemos. ¿Sabe por qué amamos tanto a Julio? porque se vació hasta lo último. ¿Sabe por qué amamos tanto a Cristo Jesús? porque Él se vació aún hasta la última gota de su sangre, no dejó absolutamente nada, nada, nada que le quedara de Él, por eso amamos tanto a Jesús. Este hombre lo que hizo fue seguir los pasos de Jesús, por eso lo amamos tanto.»\n', 'Images/ImagesPosts/ultimas-palabras-de-julio-melgar-antes-de-morir.jpg', 2, 'Misiones'),
(9, 15, 'Rueda de prensa del Papa Francisco en el vuelo de regreso de Rumanía', 'Rueda de prensa del Papa Francisco en el vuelo de regreso de Rumaní­a, este domingo, durante el vuelo que lo llevó de Rumanía a Roma, el Papa Francisco concedió una rueda de prensa en la que abordó el ecumenismo, relató cómo ha visto a Benedicto XVI y llamó a Europa a retomar el sueño de los padres fundadores de la Unión Europea.<br/><br/>A continuación el texto completo de la conferencia de prensa: <br/><br/>Alessandro Gisotti (Director de la Sala de Prensa de la Santa Sede):<br/><br/>Buenas noches, bienvenido Santo Padre. Vuelo de regreso: el lema de este viaje era “caminos juntos”, pero también volamos juntos porque pienso que hemos volado siempre tanto, también el compromiso, el cansancio. En la discurso a la prensa extranjera hace pocos días concluí­a diciendo “veo en los viajes apostólicos su cansancio, el cansancio, la fatiga, el compromiso de los colegas que ha relatado este viaje, hoy en la jornada de las comunicaciones sociales, obviamente como saben con el tema …” . santo Padre, sé que quiere, antes de las preguntas, ofrecer alguna reflexión sobre esta jornada a nosotros dedicada.<br/><br/>Papa Francisco:<br/><br/>Buenas noches. Muchas gracias a su compañía y como dijo Gisotti, hoy esta jornada llama a ustedes, llama nuestro pensamiento a ustedes. Ustedes trabajan en las comunicaciones, son operadores como dijo Alessandro, pero antes de todo ustedes son, deberían ser, testimonios de la comunicación. Hoy la comunicación va en retroceso, en general, va adelante el contacto, hacer los contactos y no llegar a comunicar. Y ustedes por vocación son testimonios en el comunicar. Es verdad, deben de hacer los contactos, pero no detenerse ahí­. Los aliento a ir adelante en este testimonio de comunicar. Este tiempo tiene menos necesidad de contactos y más de comunicación. Gracias, felicidades por su jornada y adelante con las preguntas.<br/><br/>Diana Dumitrascu (TVR):<br/><br/>Santo Padre, le agradezco su visita a Rumanía. Santidad, usted sabe que millones de nuestros connacionales han emigrado en los últimos años.  ¿Cuál será su mensaje para una familia que deja a sus propios hijos ir a trabajar al extranjero con el objetivo de asegurar un futuro mejor?<br/><br/>Papa Francisco:<br/><br/>Esto me hace pensar en el amor de la familia, porque partirse en dos y tres no es una cosa bella. Siempre está la nostalgia por el reencuentro, pero partirse porque no falte nada a la familia es un acto de amor. En la Misa de ayer hemos escuchado la última petición de aquella señora que trabajaba en el extranjero para ayudar a la familia. Siempre un desplazamiento así­ es doloroso.  ¿Por qué se van? No para hacer turismo, por necesidad. Tantas veces no es porque en el paí­s no encuentren...tantas veces son resultado de una polí­tica mundial que incide en esto. Sé en la historia de tu país después de la caída del comunismo, y después tantas, tantas empresas extranjeras han cerrado para abrir en el extranjero y ganar más. Cerrar hoy una empresa es dejar a la gente en la calle y esta es una injusticia mundial, general, de falta de solidaridad. Es un sufrimiento.<br/><br/> ¿Cómo luchar? Buscando abrir fuentes de trabajo. No es fácil, no es fácil en la situación mundial de las finanzas y de la economí­a. Pero piensen que tienen un nivel de natalidad impresionante, aquí­ no se ve el invierno demográfico que se ve en Europa. Es una injusticia no poder tener fuentes de trabajo para tantos jóvenes. Por eso deseo que se resuelva esta situación que no depende solo de Rumaní­a, sino del orden mundial financiero, de esta sociedad del consumismo, del tener más, del ganar más, y tanta gente queda sola. Esta es mi respuesta, un apelo a la solidaridad mundial en este momento que Rumanía tiene la presidencia (rotaria de la Unión Europea Ndr).<br/><br/>Cristian Micaci (Radio María Rumaní­a de idioma húngaro) :<br/><br/>Santo Padre, como dijo el director antes, se ha hablado tanto de caminar juntos. Ahora a su partida que nos aconseja a nosotros en Rumaní­a, cuáles deberí­an ser las relaciones entre las confesiones, en particular entre la Iglesia Católica y Ortodoxa, entre la minoría católica y la mayoría ortodoxa, la relación entre las varias etnias, la relación entre el mundo político y sociedad civil?.<br/><br/>Papa Francisco:<br/><br/><br/>Una relación en general yo dirí­a. La relación de la mano extendida cuando hay conflictos. Hoy un paí­s en desarrollo con alto nivel de natalidad como ustedes, no puede darse el lujo de tener enemigos dentro.<br/><br/>Se debe hacer un proceso de acercamiento, siempre. Diversas etnias, diversas confesiones religiosas, sobre todo las dos cristianas. Esto es lo primero: siempre la mano extendida, la escucha del otro. Con los ortodoxos, ustedes tienen un gran patriarca, un hombre de gran corazón y un gran estudioso. Conoce la mística de los padres del desierto, la mí­stica espiritual, estudió en Alemania, y también un hombre de oración. Es fácil acercarse a Daniel, es fácil, porque lo siento hermano, y hemos hablado como hermanos, y no diré más porque ustedes el lunes dirán... Caminemos juntos teniendo siempre esta idea: el ecumenismo no es llegar al final del partido, de la discusión. El ecumenismo se hace caminando juntos, rezando juntos; el ecumenismo de la oración.<br/><br/>Tenemos el ecumenismo de la sangre. Cuando asesinaban a los cristianos no preguntaban:  ¿Tú eres ortodoxo?,  ¿tú eres católico?,  ¿tú eres luterano?,  ¿tú eres anglicano? No, tú eres cristiano. La sangre se mezclaba.<br/><br/>Un ecumenismo del testimonio, de la oración, de la sangre, el ecumenismo del pobre que es trabajar juntos. Eso: debemos trabajar para ayudar a los enfermos, a los marginados, ayudar. Mateo 25 es un bello programa ecuménico. Caminar juntos es ya una unidad de los cristianos, pero no esperen que los teólogos se pongan de acuerdo para llegar a la Eucaristía. La Eucaristí­a se hace todos los días con la oración, con la memoria de la sangre de nuestros mártires, con las obras de caridad y deseándose el bien.<br/><br/>En una ciudad de Europa hay una relación entre el arzobispo católico y el arzobispo luterano. El arzobispo católico debía estar en el Vaticano el domingo en la noche, me ha llamado que llegarí­a el lunes en la mañana. Cuando ha llegado me dijo: Discúlpame, ayer el arzobispo luterano ha debido irse a una reunión de ellos y me ha pedido “ven por favor a mi catedral y haz tú el culto”. Existe la fraternidad, llegar a esto es tanto,  ¿no? Y la hizo el católico. No hizo la EucaristÃ­a, pero sí la predicación.<br/><br/>Cuando yo en Buenos Aires he sido invitado por la Iglesia escocesa a hacer prédicas, iba y hací­a la prédica. Se puede caminar juntos. Unidad, fraternidad, mano extendida, mirarse bien, hablar mal de los demás. Defectos tenemos todos, si caminamos juntos, todos los defectos los dejamos de lado.<br/><br/>Xavier de Normand (medios franceses):<br/><br/>Santidad, mi pregunta tiene que ver con la primera. El primer dí­a de este viaje usted fue a la catedral ortodoxa para este momento bello pero también un poco duro de la oración del Padrenuestro. Un poco duro porque católicos y ortodoxos estaban juntos, pero no han rezado juntos. Usted ha hablado del ecumenismo de la oración. Mi pregunta es: Santidad,  ¿qué ha pensado usted cuando ha permanecido en silencio durante la oración del Padrenuestro en rumano?, y  ¿cuáles son los próximos pasos concretos en este caminar juntos?<br/><br/>Papa Francisco:<br/><br/>Hago una confidencia. No he permanecido en silencio, he rezado el Padrenuestro en italiano y he visto durante la prédica del Padrenuestro, la mayoría de la gente sea en rumano, sea en latín, rezaba. La gente va más allá de nosotros las cabezas. Nosotros los jefes debemos hacer los equilibrios diplomáticos para asegurar que caminamos juntos, hay hábitos, reglas diplomáticas que es bueno mantener para que las cosas no se arruinen. Pero cada pueblo reza junto, también nosotros cuando estamos solos rezamos juntos. Este es un testimonio, y tengo una experiencia de oración con tantos pastores, luteranos, evangélicos, también ortodoxos. Los patriarcas están abiertos, también nosotros los católicos tenemos gente cerrada que no quiere, que dice que los ortodoxos son cismáticos. Son cosas viejas. Los ortodoxos son cristianos. Hay grupos católicos un poco integristas. Debemos tolerarlos, rezar por ellos, porque el Señor con el Espí­ritu Santo ablande. Pero yo he rezado los dos, no he mirado a Daniel pero creo que él también lo mismo.<br/><br/>Manuela Tulli (Ansa):<br/><br/>Hemos estado en Rumanía, país que se mostró europeí­sta. En estas elecciones algunos líderes como nuestro vicepremier Matteo Salvino han hecho campaña política mostrando sí­mbolos religiosos.  ¿Qué impresión le ha dado esto?, y si ¿es cierto que usted no quiere encontrar a nuestro vicepremier?<br/><br/>Papa Francisco:<br/><br/>Comienzo con la segunda (pregunta). Yo no he escuchado que nadie del gobierno, excepto el premier, haya pedido audiencia, nadie. Porque para una audiencia se debe hablar a la Secretaría de Estado. El premier Conte la ha pedido, fue dada como indica el protocolo. Fue una bella audiencia con el premier, de una hora o más quizás, un hombre inteligente, un profesor que sabe de qué cosa habla.<br/><br/>Segundo: del vicepremier no he recibido nada, y de los demás ministros tampoco. Sí, al presidente de la República lo he recibido.<br/><br/>Sobre las imágenes: he confesado tantas veces que de los periódicos leo dos: el diario del partido, que es Osservatore Romano. Sería bello que ustedes lo leyesen porque encontrarí­an interpretaciones muy interesantes, y cosas que digo también están ahí­. El periódico del partido y después Il Messaggero que me gusta porque tiene los tí­tulos grandes y lo hojeo así, algunas veces me detengo ahí; y no he entrado en estas noticias de las propagandas, cómo ha hecho un partido la propaganda electoral, de verdad.<br/><br/>Hay un tercer elemento. En esto me confieso ignorante: yo no comprendo la política italiana y de verdad debo estudiarla, entonces, decir una opinión sobre el comportamiento de una campaña electoral, de uno de los partidos, sin una información así, serí­a muy imprudente de mi parte. Yo rezo por todos, porque Italia vaya adelante, para que los italianos se unan y sean leales en el compromiso, también yo soy italiano porque soy hijo de un inmigrante italiano, de sangre soy italiano. Mis hermanos tienen todos la ciudadaní­a, yo no he querido tenerla porque en el tiempo que la han concedido yo era obispo y he dicho que el obispo debe ser de la patria.<br/><br/>Hay en la política de tantos países la enfermedad de la corrupción. Por todos lados. No digan mañana que el Papa ha dicho que la polí­tica italiana es corrupta. No. Yo he dicho que una de las enfermedades de la polí­tica, por todas partes, es caer en la corrupción. Por favor, no me hagan decir lo que no he dicho. Una vez me han dicho cómo son los pactos polí­ticos. Figúrate una reunión de nueve empresarios, a la mesa; discuten para ponerse de acuerdo sobre el desarrollo de su empresa, al final después de horas, horas, café, café, café, se ponen de acuerdo, han tomado la palabra, hacen el asunto, agradecen, œde acuerdo, de acuerdo; mientras lo hacen imprimir, toman un whisky para festejar, y después, comienzan a girar los papeles para firmar el acuerdo. En el momento que giran los papeles, bajo la mesa, le hago otro bajo la mesa. Esto es corrupción polí­tica. Que se hace un poco por todas partes. Debemos ayudar a los políticos a ser honestos, a no hacer campaña con banderas deshonestas, la calumnia, la difamación, los escándalos; y tantas veces sembrar odio y miedo.<br/><br/>Esto es terrible, un polí­tico nunca debe sembrar odio y miedo, solo esperanza. Justa, exigente, pero esperanza, porque debe conducir al país ahí­, y no darle miedo.<br/><br/>Eva Fernández (COPE):<br/><br/>Santo Padre, ayer en el encuentro con los jóvenes y las familias ha insistido de nuevo en la importancia de la relación entre los abuelos y los jóvenes a fin que los jóvenes tengan raíces para ir hacia adelante y los abuelos puedan soñar. Usted no tiene una familia cercana, pero ha dicho que Benedicto XVI es como tener un abuelo en casa.  ¿Aún lo ve así?<br/><br/>Papa Francisco:<br/><br/>Y más. Cada vez que voy donde él a visitarlo lo siento así, le tomo la mano y le hago hablar. Habla poco, habla despacio, pero con la misma profundidad de siempre, porque el problema de Benedicto son las rodillas, no la cabeza. Tiene una gran lucidez. Y sintiéndolo hablar me vuelvo fuerte, siento el zumo de las raí­ces que me vienen y me ayudar a seguir adelante. Siento esta tradición de la Iglesia que no es una cosa de museo la tradición. La tradición es la raíz que te dan el zumo para crecer, y tú no serás como la raí­z, no; tú florecerás, el árbol crecerá y dará los frutos, y las semillas serán las raí­ces para los demás. La tradición de la Iglesia está siempre en movimiento.<br/><br/><br/>En una entrevista que ha hecho Andrea Monda en “Osservatore Romano” ustedes leen Osservatore,  ¿no? hace unos dÃ­as, había una situación que me ha gustado tanto, del músico Gustav Mahler, y hablando de la tradición, él decí­a: la tradición es la garantí­a del futuro y no la custodia de las cenizas. No es un museo. La tradición no custodia las cenizas. La nostalgia de los integristas: regresar a las cenizas. No, las tradiciones son raíces que garantizan que el árbol crezca, florezca y dé fruto; y repito esa pieza del poeta argentino (Francisco Luis Bernárdez, Ndr) que me gusta tanto: todo lo que el árbol tiene de florido, vive de lo sepultado.<br/><br/>Estoy contento porque en Iasi hice referencia a esa abuela que ha tenido un gesto de complicidad y que con los ojos, en aquel momento he estado tan emocionado que no he reaccionado, y después el papamóvil ha seguido adelante y habrí­a podido decir a esta abuela que venga para hacer ver este gesto, y he dicho al Señor Jesús: es una pena, pero tú eres capaz de resolver, y nuestro bravo Francisco cuando ha visto la comunicación que he tenido con aquella mujer con los ojos, ha tomado la fotografí­a y hecho pública. La he visto esta tarde en Vatican Insider. Estas son las raíces. Y esto crecerá, no será como yo, pero yo doy lo mío. Es importante este encuentro.<br/><br/>Después están los verbos, cuando los abuelos sienten de tener nietos que llevarán adelante la historia, comienzan a soñar; y los abuelos cuando no sueñan se deprimen. Existe el futuro y los jóvenes animados comienzan a profetizar.<br/><br/>Lucas Wiegelmann (Herder Correspondenz):<br/><br/>Santo Padre en estos días ha hablado tanto de la fraternidad y de la gente y del caminar juntos, como hemos ya escuchado, pero vemos que en Europa crece el número de los que no desean la fraternidad, sino el egoí­smo y el aislamiento, y prefieren caminar solos.  ¿Por qué es así­?, y  ¿qué debe hacer Europa para cambiarlo?<br/><br/>Papa Francisco:<br/><br/>Discúlpame si me cito, pero lo hago sin vanidad, por utilidad. Hablé de este problema en los dos discursos en Estrasburgo: en el discurso que he dado cuando recibí el Premio Carlo Magno y después en el discurso que di a todos los jefes de Estado y de gobierno en la Capilla Sixtina en el aniversario de los pactos, en la fundación de la Unión Europea.<br/><br/>En estos discursos he dicho todo lo que pienso, y también hay un quinto discurso que no lo he dado yo, sino el alcalde Bugermeister de Aachen. Este es una joya, una joya  suya de los alemanes.<br/><br/>Europa debe coloquiar, no debe decir “pero somos unidos, ahora dile a Bruselas arreglense ustedes.<br/><br/>Todos somos responsables de la Unión Europea y esta circulación de la presidencia no es un gesto de cortesí­a como bailar el minueto: te toca a ti, te toca a ti. No, es un símbolo de la responsabilidad que cada uno de los países tiene sobre Europa. Si Europa no mira bien los retos futuros, Europa se desvanecerá, será desvanecida. Me permití decir en Estrasburgo que siento que Europa está dejando de ser la madre Europa; se está convirtiendo la “abuela Europa”. Se ha envejecido, ha perdido la ilusión de trabajar juntos. Quizás a escondidas alguno se puede hacer la pregunta:  ¿no será este el fin de una aventura de 60 años?<br/><br/>Retomar la mí­stica de los padres fundadores. Retomar esto. Europa tiene necesidad de sí­ misma, de ser ella misma, de la identidad propia, de la propia unidad; y superar con esto, con tantas cosas que la buena política ofrece, las divisiones y las fronteras. Estamos viendo las fronteras en Europa. Esto no hace bien, al menos las fronteras culturas, no hacen bien. Es verdad que el paí­s tiene su propia cultura y debe cuidarla, pero con la mÃ­stica del poliedro. Hay una globalización donde se respeta la cultura de todos, pero todos unidos.<br/><br/>Por favor, que Europa no se deje vencer por el pesimismo o las ideologías, porque  Europa es atacada no con cañones o bombas en este momento, sí con ideologí­as, ideologí­as que no son europeas, que vienen de afuera, o crecen en los grupitos de Europa, que no son grandes. Piensen en la Europa dividida y beligerante del 14 y del 32, 33, hasta el 39, que ha estallado la guerra. No regresemos a esto por favor. Aprendamos de la historia, no caigamos en el mismo hueco. La otra vez les he dicho que se dice que el único animal que cae dos veces en el mismo hueco es el hombre. El asno nunca lo hace. Pero lee el discurso de Bugermeister, una joya.<br/><br/>Gisotti:<br/><br/>Gracias Santo Padre, gracias por esta disponibilidad al término de tres dí­as así ocupados, también para estos cinco viajes, uno después del otro en esta primera parte del año, ricos de momentos.<br/><br/>Papa Francisco:<br/><br/>Ahora dos cosas, por motivos del clima debí­ ir ayer en auto dos horas y cuarenta. Fue una gracia de Dios, he visto un paisaje bellí­simo como nunca había visto. He cruzado toda Transilvania.<br/><br/>Hoy para ir a Blaj, lo mismo. Una cosa bella. El paisaje de este paí­s, agradezco también la lluvia que me ha hecho viajar así­ y no en helicóptero. Tener más contacto con la realidad.<br/><br/>La segunda cosa: sé que algunos de ustedes son creyentes, otros no tanto, pero diré a los creyentes: recen por Europa, recen por Europa, el Señor nos dio la gracia. A los no creyentes deseen la buena voluntad, el deseo de corazón para que Europa regrese a ser el sueño de los padres fundadores. ', 'Images/ImagesPosts/PapaFrancisco-Andrea-Gallarducci-ACI-020619.jpg', 2, 'Actividades Pastorales'),
(11, 15, '¿Por qué junio es el mes del Sagrado Corazón de Jesús?', 'La Iglesia Católica dedica el mes de junio al Sagrado Corazón de Jesús, para que los fieles veneren, honren e imiten más intensamente el amor generoso y fiel de Cristo por todas las personas.\n\nEs un mes donde se le demuestra a Jesús, a través de las obras, cuánto se le ama; correspondiendo a su gran amor demostrado al entregarse a la muerte por sus hijos, quedándose en la Eucaristía­a y enseñando el camino a la vida eterna.\n\n\nSobre esta fiesta, el Papa Benedicto XVI afirmó que \"al ver el corazón del Señor, debemos de mirar el costado traspasado por la lanza, donde resplandece la inagotable voluntad de salvación por parte de Dios, no puede considerarse culto pasajero o de devoción: la adoración del amor de Dios, que ha encontrado en el símbolo del \"corazón traspasado\" su expresión histórico-devocional, la cual sigue siendo imprescindible para una relación viva con Dios\".\n\nLa devoción al Corazón de Jesús ha existido desde los inicios de la Iglesia, desde que se meditaba en el costado y el corazón abierto del Señor.\n\nCuenta la historia que el 16 de junio de 1675, el Hijo de Dios se le apareció a Santa Margarita Marí­a de Alacoque y le mostro su Corazón rodeado de llamas de amor, coronado de espinas, con una herida abierta de la cual brotaba sangre y, del interior del mismo salía una cruz.\n\nSanta Margarita escuchó al Señor decir: \"he aquí­ el Corazón que tanto ha amado a los hombres, y en cambio, de la mayor parte de los hombres recibo ingratitud, irreverencia y desprecio\".', 'Images/ImagesPosts/SagradoCoraznJesusMargaritaAlacoque_100615.jpg', 2, 'Articulos Vocacionales'),
(17, 15, 'Fray Nelson pide oraciones por problemas de salud', 'El sacerdote dominico Nelson Medina, conocido como Fray Nelson, se encuentra en un hospital de Colombia donde viene recibiendo chequeos médicos de cierto cuidado, y por ello, ha pedido oraciones a todos sus amigos y seguidores. <br /> <br /> Una publicación compartida de Nelson Medina (@fraynelson) el 1 Jun, 2019 a las 7:36 PDT: <br /> ”Amigos, les comparto que me encuentro en unos chequeos médicos de cierto cuidado y trascendencia”, comentó Fray Nelson a través de su cuenta de Instagram el 1 de junio desde una de las sedes de la Fundación Santa Fe de Bogotá, donde deberá pasar algunos días.<br /><br /> El sacerdote explicó que, por motivo de la revisión médica, no podrá publicar con la frecuencia como le gusta hacerlo.<br /> “Gracias por su amistad, y me encomiendo a sus oraciones” concluyó Fray Nelson en su mensaje.<br /><br /> En otro mensaje compartido el domingo 2 de junio, Fray Nelson envió un agradecimiento a todos los que hacen sentir su presencia y sobre todo sus oraciones.<br /><br />“Dios les pague”, dijo el presbítero dominico.<br /><br /> Hasta el momento, el sacerdote ha recibido miles de comentarios de apoyo en Twitter e Instagram.', 'Images/ImagesPosts/salud.jpg', 2, 'Testimonios Vocacionales'),
(29, 15, 'Música Sacra', 'En la tradición de la música occidental, la música sacra (también llamada música sagrada y, en ocasiones, según la función y el contexto, música litúrgica) es toda aquella música que se ha concebido para cantarse, tocarse o interpretarse en los contextos litúrgicos o religiosos.<br />\n<br />\nLa música sacra cristiana fue una forma de expresión musical nacida desde un comienzo del cristianismo, en un principio herencia de la música judía (cantilación) siendo desarrollada durante los siglos posteriores en multitud de formas, relacionadas con los distintos ritos. Por extensión también es aplicable a las diferentes manifestaciones musicales religiosas de otros pueblos, ya sean de origen hindú, budista, árabe, judí­o etc. La historia de la música occidental tal y como se la conoce hoy en dí­a comienza durante la Edad Media cuando la Iglesia católica incluyó ciertos cantos en latí­n en sus ceremonias y comenzó a utilizar sí­mbolos escritos destinados a ser recordados como indicaciones musicales a la hora de ejecutar los cantos; a estos símbolos se les llamó neumas y sirvieron para el canto gregoriano, llamado antes canto llano, una selección de cantos litúrgicos.\n', 'Images/ImagesPosts/musica sacra.jpg', 2, 'Articulos Varios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `radio`
--

CREATE TABLE `radio` (
  `Id_Radio` int(11) NOT NULL,
  `Texto` text NOT NULL,
  `Enlace` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `radio`
--

INSERT INTO `radio` (`Id_Radio`, `Texto`, `Enlace`) VALUES
(1, 'Nuestra comunidad cuenta con un espacio para expresarse por medio de alabanzas, lectura de la palabra de Dios, y muchas actividades más.', 'http://188.165.236.90:6304/;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `santoral`
--

CREATE TABLE `santoral` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Historia` text DEFAULT NULL,
  `Imagenes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `santoral`
--

INSERT INTO `santoral` (`Id`, `Nombre`, `Historia`, `Imagenes`) VALUES
(2, 'Santa Catalina Labouré', 'Nació el 2 de mayo de 1806 en Fain-les-Moutiers, Francia;  en el seno de una familia campesina. Al quedar huérfana de madre a los 9 años se encomendó a la Santísima Virgen que le sirviera de madre, y la Madre de Dios le aceptó su petición. Como su hermana mayor se fue de Hija de la Caridad, Catalina tuvo que quedarse al frente de los trabajos domésticos. A los 14 años pidió a su papá que le permitiera irse de religiosa a un convento pero él, que la necesitaba para atender los muchos oficios de la casa, no se lo permitió. Años más tarde, el 21 de abril de 1830 entra a la Compañía de las Hijas de la Caridad de San Vicente de Paúl. \nEl 27 de noviembre de 1830 la Virgen María se le apareció totalmente resplandeciente a Santa Catalina, derramando de sus manos hermosos rayos de luz hacia la tierra. Ella,  le encomendó a Santa Catalina que acuñara una medalla de Nuestra Señora así como se le había aparecido y que tuviera por un lado las iniciales de la Virgen María *M*, y una cruz, con esta frase *Oh María, sin pecado concebida, ruega por nosotros que recurrimos a Ti*. Y le prometió ayudas muy especiales para quienes lleven esta medalla y recen esa oración. Esta aparición dio origen a la Medalla Milagrosa  y de ella tomó también su nombre la fiesta de la Virgen Inmaculada de la Sagrada Medalla,  instituida por León XIII el 23 de julio de 1894. Santa Catalina Labouré muere el 31 de diciembre de 1876. Es beatificada el 28 de mayo de 1933 y canonizada el 27 de julio de 1947. \n', 'Images/SantoralImages/Catalina.jpg'),
(3, 'Beato Federico Ozanam', 'Antonio Federico Ozanam nació en Milán el 23 de abril de 1813, tercer hijo del matrimonio Juan-Antonio Francisco Ozanam y Maria Nantas. Este seglar del siglo XIX, cristiano en un mundo secularizado, fue un auténtico profeta de su tiempo en la Iglesia a la que él ama con gran amor y sumisión. Federico realizó sus estudios secundarios en Lyon y su carrera universitaria en París. En tiempos de revolución en la sociedad y en la Iglesia, Ozanam y sus amigos se propusieron tener, además de las conferencias de historia, las conferencias consagradas a la caridad. En 1833 con un grupo de siete amigos fundó la Sociedad de San Vicente de Paúl, al que eligen como patrono. El mayor de ellos Emmanuel Bailey, 39 años, Federico 20 años, sólo uno del grupo era más joven que él. Cuando deciden ir al encuentro de los pobres Emmanuel Bailey les envía a Sor Rosalía Rendu, Hija de la Caridad, gran apóstol y sierva de los desheredados del barrio parisino de Saint-Médard. \nFederico como hijo, esposo, padre y amigo, dotado de una rara sensibilidad, impresionó profundamente a todos aquellos que lo conocieron. Fue Profesor titular de derecho comercial, en la Facultad de Lyon, y más tarde profesor de Literatura Extranjera en la Sorbona. Por motivos de salud tuvo que abandonar la enseñanza, que ejercía como un apostolado, dedicó sus últimas fuerzas a la investigación científica y a la Sociedad de San Vicente de Paúl. Murió en Marsella tras una larga enfermedad el 8 de septiembre de 1853. Fue beatificado por San Juan Pablo II en París el 22 de agosto de 1997. \n', 'Images/SantoralImages/Federico.jpg'),
(4, 'San Francisco Regis Clet (Presbítero y Mártir) ', 'San Francisco Regis Clet nació el 19 de agosto de 1748 en Grenoble. Es el décimo de los 15 hijos de Claudina Bourquy y César Clet. Cursó sus estudios en el colegio dirigido por sacerdotes diocesanos y los Oratorianos. La Congregación de la Misión era conocida en su región natal y Francisco se siente atraído a seguir el camino de los Misioneros. Entró en el noviciado el 6 de marzo de 1769, en Lyón, en el barrio de Fourvier. Fue ordenado sacerdote el 27 de marzo de 1773.\n\nSu primer apostolado fue de profesor del seminarios de Mayor (teología) de Annecy siendo muy apreciado y nombrado superior. En Mayo de 1778 es nombrado Superior del seminarios Interno de la Congregación de la Misión.\nAl estallar la *Revolución Francesa*, el 13 de Julio de 1789 San Lázaro fue saqueado y sacerdotes y hermanos tuvieron que huir. Después de un tiempo el Superior General desea enviar misioneros a China, Francisco Regis se ofrece y el Superior acepta su ofrecimiento hasta la segunda ocasión. En abril de 1791 parte con dos compañeros hacia China llegando a Macao el 15 de octubre. Su labor misionera se extendió durante treinta años. Muere estrangulado el 18 de febrero de 1820 en Uchanfú. Es beatificado el 27 de mayo de 1900 y canonizado el 1 de octubre de 2000 junto con 119 mártires más. \n', 'Images/SantoralImages/Francisco.jpg'),
(5, 'Beato Ghebra Miguel (Sacerdote y Mártir)', 'Ghebra Miguel, cuyo nombre significa «Esclavo de San Miguel», de origen etíope, nació en 1791, en Dibo, una aldea de la región de Godjam, situada al este del Nilo azul. Eran muy religiosos, de la confesión monofisita (creencia sólo en una naturaleza de Cristo, humana o divina y no en ambas) y en ella lo educaron. El nombre de su padre era Ato Akilo, y el de su madre aún se desconoce. Un accidente y luego una enfermedad le hizo perder un ojo, más no fue obstáculo para que entrara a la vida clerical en Góndar, donde se dedicó al estudio y aprendió, al lado de buenos maestros, el canto y la música etíope.\nA los diecinueve años ingresó al monasterio de Mertule-Mariam, y tras seis años de noviciado recibió la túnica blanca religiosa y la solemne imposición del bonete blanco. Escribiendo Monseñor Justino de Jacobis, vicario apostólico de Abisinia, al P. Etienne, Superior general de la Congregación de la Misión, el 29 de Junio de 1858, le rogaba que tuviera a bien aceptar un retrato del mártir Ghebra Miguel. En realidad no era más que postulante; puesto que su tiempo de vocación no podía contarse más que desde el momento en que hubiera podido empezar su seminarios interno. Ahora bien, en este preciso momento se encontraba ya en la cárcel. De todos modos ya pertenecía de corazón a la Congregación de la Misión. Recibe la ordenación sacerdotal en manos del propio San Justino el 1 de enero de 1851. Muere el 13 julio de 1855 y su beatificación tuvo lugar el 3 de octubre de 1926.  \n', 'Images/SantoralImages/Ghebre.jpg'),
(6, ' Beata Josefina Nicoli (Virgen) ', 'Nació el 18 de noviembre de 1863 en Casatisma, (Pavía, Italia). Era la quinta de diez hijos de una familia de clase media y de profunda fe. El 24 de septiembre de 1883, a la edad de veinte años, ingresó en la Compañía de las Hijas de la Caridad de San Vicente de Paúl, en la casa *San Salvario* de Turín, donde hizo el postulantado y el noviciado. En el año 1885 fue trasladada a Cerdeña. Su primera misión, que acogió con gran entusiasmo, fue la de enseñar en el *Conservatorio de la Providencia* de Cágliari. La experiencia educativa entre niñas pobres la marcó de forma especial.\n En el año 1886, la ciudad de Cágliari fue azotada por la epidemia del cólera, y sor Josefina, juntamente con sus hermanas del conservatorio, se dedicó, en los momentos que le quedaban libres después del horario escolar, a socorrer a las familias pobres de la ciudad, organizando *cocinas económicas* que pusieron a disposición de las autoridades civiles. Después de casi quince años de activa vida apostólica en Cágliari, en el año 1889 fue trasladada al orfanato de Sássari. También allí desarrolló un amplio proyecto apostólico, organizando diversas instituciones orientadas siempre al servicio hacia los pobres. Después de toda una vida dedicada a la educación de los jóvenes y a los pobres, murió en Cágliari, a causa de una bronco-pulmonía el 31 de diciembre de 1924. Fue Beatificada por el papa Benedicto XVI el 3 de febrero de 2008 en la misma ciudad. ', 'Images/SantoralImages/Giuseppina.jpeg'),
(7, 'Memoria de Santa Isabel Ana Bayley Seton ', 'Nace en Nueva York el 28 de agosto de 1774. Creció en el seno de la Iglesia Episcopaliana. Casada con Guillermo Seton con quien llega a tener cinco hijos. Enviuda el 27 de diciembre de 1803. El 14 de marzo de 1805 abraza el catolicismo arrostrando las múltiples dificultades que le crean parientes y amigos. Se aplica asiduamente a la vida espiritual. Educa con solicitud a sus hijos. \nDeseosa de entregarse a la actividad caritativa y educadora, funda en la diócesis de Baltimore una instituto de Hermanas de la Caridad bajo la advocación de San José, la cual, tiene por finalidad la formación de los jóvenes. Dicha congregación está inspirada bajo el espíritu de San Vicente de paúl.  Muere piadosamente en Emmitsburg el 4 de enero de 1821. Fue beatificada el 17 de marzo de 1963 por San Juan XXIII y canonizada por San Pablo VI el 14 de septiembre de 1975, siendo la primera Santa estadounidense.  A su muerte, el Instituto de Hermanas de la Caridad se integraron a la compañía de las Hijas de la Caridad.  \n', 'Images/SantoralImages/Isabel.png'),
(9, 'Santa Juana Antida Thouret (Fundadora de las Hermanas de la Caridad) ', 'Juana Antida Thouret, nace el 27 de noviembre de 1765 en Sancey-le-Long, diócesis de Besançon, Francia. Desde niña se enfrenta a las dificultades debido a su madre enferma, que muere cuando Juana tiene 14 años. A los quince años se hace empleada doméstica y descubre el camino de entregar su corazón y se compromete por voto secreto a vivir en virginidad al sentirse llamada a consagrarse por entero a Dios. Es por ello que, en 1787 ingresa a la Compañía de las Hijas de la Caridad en la que permaneció hasta 1793, cuando la Compañía fue dispersa por la Revolución Francesa. Aun durante la persecución,  no cesó de ejercer la caridad mediante la asistencia a los pobres y enfermos. \nEn 1799, fundó la Congregación de las Hermanas de la caridad bajo la protección de San Vicente de Paúl. Juana Antida era una mujer donada totalmente a los pobres.  Murió en Nápoles el 24 de agosto de 1826. Fue beatificada por Pío XI el 13 de mayo de 1926 y canonizada por el mismo pontífice el 14 de enero de 1934. La celebración de su memoria en la Familia Vicentina es un recordar su permanencia entre las Hijas de la Caridad y un acercamiento a la espiritualidad que parte de un legado vicenciano: el servicio a los pobres. \n', 'Images/SantoralImages/Joan.jpg'),
(11, 'San Juan Gabriel Perboyre', 'Juan Gabriel Perboyre nació en Puech de Montgesty (Lot) el 5 de enero de 1802. Es el mayor de ocho hijos del matrimonio formado por Pedro Perboyre y María Rigal. El 15 de diciembre de 1818 Juan Gabriel fue recibido en la Congregación de la Misión en Montauban. El 23 de Septiembre de 1826 fue ordenado sacerdote por Monseñor William Dubourg, obispo de Montauban en la capilla de la rue du Bac en Paris. Después de una estancia como profesor de teología y director del colegio, es llamado a París para desempeñar la función de Director del Seminario Interno de la Congregación de la Misión. Pero Juan Gabriel desea ardientemente partir para la misión de China. \nDesembarca en Macao el 29 de agosto de 1835. Pese a los peligros de las persecuciones, ejerce el ministerio misionero y sacerdotal entre los cristianos chinos. Juan Gabriel Perboyre, es delatado por uno de sus adeptos padece el Martirio en Uchanfú el 11 de septiembre de 1840 tras prolongadas torturas. Fue beatificado por León  XIII el 10 de noviembre de 1889 y canonizado el 2 junio de 1996 por San Juan Pablo II. \n', 'Images/SantoralImages/JuanGabriel.jpg'),
(12, 'San Justino de Jacobis', 'Es llamado el *apóstol de Etiopía*. Giustino de Jacobis, nació en San Fele, Lucania, el 9 de octubre de 1800, todavía siendo niño se muda a Nápoles con su familia. Es aquí donde en 1818 un padre carmelita percibió la vocación del joven Giustino, dirigiéndolo hacia la Congregación de la Misión. Se ordena sacerdote en Brindis el 12 de junio de 1824 y ejerce su apostolado con asiduidad, particularmente en Nápoles, donde hace estragos el cólera en 1836. \nEn 1839 es enviado por la Propaganda Fide a la misión de Etiopía, en la que trabaja infatigablemente durante veinte años. Se le nombra prefecto apostólico y se le consagra como obispo en Massauah el 7 de enero de 1849. Sufre la opresión con valentía y muere en el valle de Aligadé el 31 de julio de 1860. Fue beatificado el 25 de julio de 1939 y canonizado por el papa Pablo VI el 26 de octubre de 1975. \n', 'Images/SantoralImages/Justino.jpg'),
(13, 'Beata Lindalva Justo De Oliveira (Virgen y Mártir) ', 'Nació el 20 de octubre de 1953 en Sitio Malhada da Areia, una zona muy pobre del Estado de Rio Grande do Norte (Brasil). Era la sexta de trece hermanos. Desde su infancia se destacó por un amor particular a los pobres. Ingresó al Postulantado de las Hijas de la Caridad en 1988 y su admisión a la Compañía el 16 de julio de1989. El 29 de enero de 1991 fue enviada como Hija de la Caridad de San Vicente de Paúl a servir a los cuarenta ancianos de un asilo en San Salvador de Bahía. \nLa cordialidad y alegría con que trataba a todas las personas le granjearon la estima de las Hermanas, de los funcionarios del asilo y de las personas a las que asistía. Realizaba los trabajos más humildes al servicio de los ancianos, les ayudaba material y espiritualmente, fomentando en ellos la recepción continúa de los sacramentos; cantaba y oraba con ellos. \nSu servicio de caridad creció sin descanso y defendió esforzadamente su virginidad hasta la muerte. Coronada con el don del martirio, murió el 09 de abril de 1993, apuñalada por uno de los huéspedes dentro del asilo. Fue beatificada el 2 de diciembre de 2007 en Salvador de Bahía, Brasil. \n', 'Images/SantoralImages/Lindalva.jpg'),
(15, 'Santa Luisa de Marillac', '(Cofundadora de la Compañía de las Hijas de la Caridad )Nació el 12 de agosto de 1591 y quedó huérfana a los 14 años. Tras una infancia y adolescencia llena de sufrimiento y de preparación intelectual en arte y filosofía, contrae matrimonio el 15 de febrero de 1613 con Antonio Le Gras (secretario de la reina de Francia: María de Médecis) con quien tiene un hijo al que ponen el nombre de Miguel. El 21 de diciembre de 1625 queda viuda y se consagra por un voto de viudez y se pone bajo la dirección espiritual de San Vicente de Paúl, quien la dedica a socorrer a los pobres, a visitar a las cofradías de la Caridad. El 29 de noviembre de 1633 preside el nacimiento de la Compañía de las Hijas de la Caridad. \nLuisa de Marillac, fue una mujer con una profunda vida de oración, vida interior, una devoción extraordinaria al Santo Espíritu de Dios y a la Santísima Virgen. Muere el 15 de marzo de 1660. Fue beatificada el 9 de mayo de 1920 por Benedicto XV.  Fue canonizada el 11 de marzo de 1934 por el papa Pio XI y el papa San Juan XXIII la proclamó celestial patrona de cuantos se entregan a la acción social cristiana. \n', 'Images/SantoralImages/Luisa.jpg'),
(16, 'Beato Marco Antonio Durando', 'Marco Antonio nació el 22 de mayo de 1801 en Mondovi, en la ilustre familia de los Durando. Su madre era una mujer piadosa y su padre un liberal agnóstico. Dicho Beato fue ordenado sacerdote el 12 de junio de 1824. Casi toda su vida de sacerdote la pasó en Turín, en donde fue Superior y Visitador de la Provincia Norte desde 1855 hasta su muerte el 10 de diciembre de 1880 a la edad de 79 años. \nImpulsó las misiones populares, las obras de caridad a favor de los pobres, enfermos y moribundos; impulso las misiones ad gentes, la propagación de la Medalla Milagrosa y el acompañamiento a las Hijas de la Caridad. En momentos difíciles fue el organizador y el gran impulsor de la Congregación de la Misión y de las Compañía de las Hijas de la Caridad. Asimismo, en el año 1865 junto a Luisa Borgiotti fundó las “Hijas de la Pasión de Jesús Nazareno”, llamadas después como “Hermanas Nazarenas”. El carisma de dicha Congregación es la devoción particular a la Pasión de Jesús y el fin de ella es la asistencia domiciliaria diurna y nocturna a los enfermos y jóvenes abandonados. Marco Antonio fue beatificado por Juan Pablo II el 20 de octubre de 2002. \n', 'Images/SantoralImages/Marco.jpg'),
(17, 'María Magdalena Fontaine y compañeras (Vírgenes y mártires)', 'María Magdalena Fontaine y tres compañeras: María Francisca Lanel, Teresa Magdalena Fantou y Juana Gerard son conocidas como las mártires de Cambrai, pues allí murieron víctimas de la Revolución Francesa, el 26 de junio de 1794, mientras ejercían su misión de servicio al pobre. Cuando comenzó la Revolución Francesa, en la casa de Arras, Francia, las Hijas de la Caridad se consagraban allí a la educación de las niñas pobres, visitas a domicilio y al cuidado de los enfermos. Atendían la farmacia, haciéndose famosas por la eficiencia con que preparaban las medicinas. La comunidad se componía de siete Hermanas siendo Sor Magdalena Fontaine la superiora de dicha comunidad. \nSor Maria Magdalena Fontaine nació el 22 de abril de 1723. Ingreso a la Compañía de las Hijas de la Caridad de San Vicente de paúl el 9 de julio de 1748. María Francisca Lanel nació el 24 de agosto de 1745. Entró a la Compañía de la Hijas de la Caridad el 10 de abril de 1764. Sor Teresa Magdalena Fantou nace el 29 de julio de 1747 e ingreso al Seminario de las Hijas de la Caridad en París el 28 de noviembre de 1771. Sor Juana Gerard nació el 23 de octubre de 1752. Entró a la Compañía de las Hijas de la Caridad el 17 de septiembre de 1776. Dichas hermanas fueron proclamadas beatas el 13 de junio de 1920 por el papa Benedicto XV. \n', 'Images/SantoralImages/MariaMagdalena.jpg'),
(18, 'Beata Marta Wiecka (Virgen) ', 'Nació el 12 de enero de 1874 en Nowy Wiec, Polonia. Es la tercera de trece hijos. A los dieciséis años pidió el ingreso en la Compañía de las Hijas de la Caridad. La visitadora la hizo esperar dos años, hasta alcanzar la edad exigida. En el año 1892, a los 18 años lo solicitó de nuevo con su amiga Mónica Gdaniec, pero no fue admitida en Chelmno porque había exceso de postulantes. Entonces el número de admisiones estaba restringido por las autoridades prusianas. Ambas amigas, viajaron a Cracovia, que estaba entonces bajo el dominio austriaco, y allí, el 26 de abril de 1892, fueron admitidas en el Postulantado. Después de cuatro meses, el 12 de agosto, entraron en el noviciado. Allí, durante ocho meses de formación inicial, asimiló el ideal de las Hijas de la Caridad que iba a desarrollar en los años posteriores.\nSirvió a los pobres en algunos hospitales durante doce años de vida consagrada. Sor Marta era una mujer apasionada por su vocación, la cual, vicia con mucha satisfacción, entrega y alegría.  De forma discreta y callada ayudaba a la preparación para la confesión e instruía en la doctrina de la fe. Al sustituir voluntariamente a un joven padre de familia en la desinfección  de una habitación, contrajo una grave enfermedad. Murió el 30 de mayo de 1904 y fue beatificada por el papa Benedicto XVI el 24 de mayo de 2008. \n', 'Images/SantoralImages/Marta.jpg'),
(21, 'Beatos Luis José François, Juan Gruyer y Pedro Renato Rogue', ' La Revolución francesa tuvo muchas causas de muy diverso género, pero desde sus principios tomó un carácter anticlerical con determinaciones persecutorias que desembocarían en la constitución civil del clero (12-julio--1790), que convertía a la Iglesia en una dependencia del Estado y prohibía a los sacerdotes que no aceptaran por juramento civil ejercer su ministerio, si no serian condenados al destierro. En este ambiente, los Hijos de San Vicente de Paúl de la Casa Madre  rehusaron el juramento de la Constitución civil del clero y polemizaron contra ella. Un buen número de ellos sellaron con su sangre su fidelidad a la Iglesia. Se sabe con certeza el nombre de unos 40 que fueron guillotinados o deportados. Ante ello, solo han sido beatificados cinco misioneros, entre ellos están: \nBeato Luis José François, nacido el 3 de febrero de 1751 en Busigny (Francia), de familia profundamente cristiana. No tenía más de 15 años, cuando ingresó entre los Hijos de san Vicente de Paúl, en la casa madre de san Lázaro de Paris Tuvo que esperar a los 18 años para emitir sus votos. Ordenado sacerdote en 1773, fue dedicado a enseñar teología a la vez que fue nombrado director del seminarios de Troyes. En 1788 era nombrado Secretario general de su Congregación. Es beatificado el 17 de octubre de 1926. \nBeato Juan Enrique Gruyer, nació el 13 de junio de 1734 en Dole (Francia),de padres cristianos, que le educaron en el amor y temor de Dios siguiendo la llamada de Dios, se ordenó de sacerdote en St. Cloud y se estableció en su villa natal, viviendo con su familia y ayudando al clero parroquial. Deseando más perfección, cuando tenía 37 años, se determinó dejar su familia y su diócesis ingresando a la Congregación de la Misión. Fue destinado a Argens, donde la Congregación tenía una comunidad dedicada al ministerio de las misiones populares. Allí emitió sus votos, el 24 de enero de 1773. Nombrado vicario de Ntra. Sra. de Versailles pasó en 1784 a la parroquia de san Luis, donde le sorprendió la Revolución. El seminarios de san Fermín le abrió sus puertas y el superior, Beato Luís José François, le acogió fraternalmente. Su muerte el 3 de septiembre de 1792 se une a la del Beato Luís José, con el cual compartió sufrimientos y martirio. Fue beatificado al igual que el Beato Luis José: 17 de octubre de 1926. \nBeato Pedro Renato Rogue nace en Vannes el 11 de junio  de 1758. Se ordena sacerdote el 12 de septiembre de 1782 y se dedica a la formación del clero como al ministerio parroquial, pese a las amenazas de la Revolución. Es decapitado el 3 de marzo de 1796 y beatificado el 10 de mayo de 1934. \n', 'Images/SantoralImages/PedroRenato.jpg'),
(22, 'Beata Rosalía Rendu', 'Sor Rosalía (Juana María) Rendu, nació el 9 de septiembre de 1786 en Confort, en el cantón de Ain, Francia. Desde niña fue educada en el ejercicio de la caridad, por lo que el atractivo servicio de los pobres era en ella natural. Cuando tenía 15 años, hizo una experiencia con las Hijas de la Caridad en el vecino hospital de Gex. Ingreso al seminarios de la Casa Madre de las Hijas de la Caridad en Paris el 25 de mayo de 1802. Enfermó y fue enviada a una casa del barrio de Mouffetard, un barrio pobre de París donde permaneció 53 años hasta su muerte. \nDurante su vida se dedicó a las obras de la comunidad y fundó otras nuevas. De manera especial se dedicó a la visita a los pobres en sus domicilios. Fue un instrumento de pacificación. Sor Rosalía, también acompañaba a muchos jóvenes, con frecuencia nobles, en el ejercicio de la caridad, entre ellos estaba el Beato Federico Ozanam y el venerable León Le Prevost, quienes dieron inicio a las “Conferencias de San Vicente de Paúl”. Sor Rosalía Rendu murió el 7 de febrero de 1856 y fue Beatificada por San Juan Pablo II el 9 de noviembre de 2003. \n', 'Images/SantoralImages/Rosalia.jpg'),
(23, 'Solemnidad de San Vicente de Paúl', 'San Vicente de Paúl (Fundador de la Congregación de la Misión y de la Compañía de las Hijas de la Caridad) nació el 24 de abril de 1581 en una pequeña casa rural en las afueras de la aldea de Pouy, a unos cinco kilómetros de la ciudad de Dax, en la región de las Landas, suroeste de Francia. Hijo de Jean de Paul y Bertrana de Moras, fue el tercero de seis hermanos. La modesta condición de la familia hizo que muy pronto el niño Vicente tuviera que contribuir con su trabajo de pastor de ovejas y de cerdos a la economía familiar. Pronto también dio muestras de una inteligencia despierta, lo que llevó a su padre a pensar que este hijo podía muy bien \'hacer carrera\' expresamente, una carrera eclesiástica. Cursó estudios primarios y secundarios en Dax, y posteriormente filosofía y teología en Toulouse durante siete años. Hizo también algunos estudios en Zaragoza. \nEs ordenado sacerdote el 23 de septiembre de 1600. Ejerció durante veinte años como párroco y capellán de familia de los Gondi. Además fue capellán general de las galeras francesas y trabajó en favor de los galeotes. En el año 1617 fundó la primera Cofradía de la Caridad, constituida por mujeres acaudaladas dedicadas a ayudar a los enfermos y a los pobres en Châtillon-les-Dombes, cerca de Lyon. San Francisco de Sales le nombró superior de los conventos de la Visitación. En 1625 instituye la Congregación de la Misión con el fin de evangelizar a los pobres campesinos, la formación del clero y laicos. Con la ayuda de Santa Luisa de Marillac funda la Compañía de las Hijas de la Caridad el 29 de noviembre de 1633. Muere el 27 de septiembre de 1660. Es beatificado el 13 de agosto de 1729 por Benedicto XIII y es canonizado el 16 de junio de 1737 por Clemente XII. El papa León XIII lo proclamó Patrón Universal de las obras caritativas.   \n', 'Images/SantoralImages/Vicente.png'),
(25, 'Beatas María Ana Vaillot y Odalia Baumgarten (Vírgenes y Mártires) ', 'Hijas de la Caridad de San Vicente de Paúl en el Hospital de San Juan de Angers. Fueron ejecutadas durante la revolución Francesa el 1 de febrero de 1794 junto con muchos otros mártires.  María Ana Vaillot nació el 13 de mayo de 1736 en Fontainebleau e ingreso a la Compañía de las Hijas de la Caridad el 25 de septiembre de 1761. Odalia Baumgarten nació el 15 de noviembre de 1750 en Gondrexange, Lorena. Ingreso a la Compañía el 4 de agosto de 1775. \nAmbas se encontraban trabajando al servicio de los pobres enfermos del Hospital de San Juan de Angers cuando estalló la Revolución Francesa en 1789. Requeridas para jurar la Constitución Civil del Clero, se negaron rotundamente fieles a la Iglesia y a su conciencia; por ello fueron condenadas a muerte. De camino al martirio decía una a otra “nos está destinada una corona, no la perdamos hoy”. Así pues, fueron fusiladas el 1 de febrero de 1794. Fueron beatificadas por San Juan Pablo II junto a 97 mártires más el 19 de febrero de 1984. \n', 'Images/DefaultImages/OdileyMarie.jpg'),
(26, 'Beatos Fortunato, Adoración Cortés, Josefa Martínez y compañeras', ' El padre Fortunato Velasco Tobar y trece compañeros fueron martirizados en Teruel, Oviedo, Gijón, Guadalajara y Urgel (España) entre el 13 de octubre de 1934 y el 6 de diciembre de 1936. Sor Melchiora Adoración Cortés Bueno y catorce compañeras fueron martirizados en Madrid, fueron perseguidas por ser fieles a su fe y su vocación de Hijas de la Caridad entre el 12 de agosto de 1936 y el 11 de febrero de 1937, y la Hermana Josepha Martínez Pérez y doce compañeras martirizadas en Valencia fueron perseguidas por ser fieles a su fe y vocación como Hijas de la Caridad entre el 18 de agosto de 1936 y el 9 de diciembre de 1936. Fueron beatificados en Tarragona el 13 de octubre de 2013.', 'Images/DefaultImages/adoracionCortes.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `Id_Seccion` int(11) NOT NULL,
  `Seccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`Id_Seccion`, `Seccion`) VALUES
(1, 'Obras'),
(2, 'Actividades Pastorales'),
(3, 'Misiones'),
(4, 'Artículos vocacionales'),
(5, 'Testimonios vocacionales'),
(6, 'Artículos Varios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seminarios`
--

CREATE TABLE `seminarios` (
  `Id_Seminario` int(11) NOT NULL,
  `Titulo` text NOT NULL,
  `Cuerpo` text NOT NULL,
  `Imagenes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seminarios`
--

INSERT INTO `seminarios` (`Id_Seminario`, `Titulo`, `Cuerpo`, `Imagenes`) VALUES
(1, 'Seminario de Filosofía La Mialgrosa', '¡Nuestra Realidad!\n\nEl Seminario La Milagrosa, es una casa de formación comprendida por las etapas de Propedéutico y Filosofía, donde son formados los futuros misioneros vicentinos (Congregación de la Misión), en diversas áreas como lo son las dimensiones propias del Eje Vicentino: espiritual, intelectual, comunitaria, humana y apostólica. \nEs acá donde los candidatos van madurando su llamado vocacional en pos de la evangelización de los pobres, que a la vez les permite entrar en contacto directo con la espiritualidad propia del Carisma. Contamos con presencia en toda Centroamérica, asimismo nuestros estudiantes proceden de los diversos países del istmo, siendo este año 2020 conformado por las nacionales de: Guatemala, El Salvador, Honduras, Nicaragua y Panamá.\nLas dimensiones que propician la formación de los estudiantes radican en el compromiso personal ante Dios y la comunidad, por lo tanto el candidato va recibiendo las herramientas necesarias para irse desenvolviendo en las diversas áreas que deben ser asumidas y trabajadas, siendo así, la formación académica se divide en 2 etapas Propedéutico, etapa inicial donde los candidatos reciben formación en CONFREGUA (Conferencia de Religiosos en Guatemala), introduciéndose a temas generales con respecto a la Fe, la misión , la Iglesia y su magisterio, luego se recibe los estudios de Filosofía en la Universidad Rafael Landívar (URL), donde los estudiantes reciben los conocimientos propios del pensamiento crítico y emancipador de la filosofía, carrera necesaria para la formación eclesial de los misioneros.\nEn ámbitos apostólicos trabajamos en conjunto a la Familia Vicentina, por medio de servicios caritativos, así como las santas misiones populares que se realizan en Semana Santa y fin de año, también se comparten formaciones propicias para los diversos servicios que presta la FamVi y durante el transcurso del año se acompaña pastoralmente a comunidades de las parroquias atendidas por misioneros vicentinos, siendo estas: Parroquia El Señor de las Misericordias (zona 1 y 3 ) y la Parroquia San Vicente de Paúl, Bethania (zona 7).\nAnte la actual crisis que se atraviesa debido a la pandemia COVID-19, se ha adquirido una nueva pastoral, un servicio virtual, apostolado que dimos inicio en el mes de marzo con las transmisiones de las santas eucaristías dominicales y semanales, así como los ejercicios de piedad propios de la Cuaresma, teniendo un contacto un poco más cercano con nuestras comunidades pese al confinamiento, por otra parte, la parroquia El Señor de las Misericordias emprendió un proyecto para ayudar a las familias más afectadas por esta situación, familias de su jurisdicción parroquial, a quienes de manera semanal se apoyó con víveres, los cuales eran adquiridos por donaciones recibidas, creando así un centro de acopio, donde era atendido por comunidades de la parroquia y el seminarios.', 'Images/SeminariosImages/seminariomilagrosa.png'),
(2, 'Seminario de Teología San Vicente de Paúl', 'Está ubicado en la “Casa Julio Pineda” 10ª Avenida Sur, n. 1127, Barrio San Jacinto, San Salvador. \nEn ella viven el formador y los jóvenes/seminaristas que están en la etapa de Teología. Los estudios teológicos se realizan en la Universidad Centroamericana José Simeón Cañas UCA. \nTel: (00 503) 2270-3012\nCorreo electrónico:seminaristasv@gmail.com  \nReseña histórica de la Etapa de Teología, en la Provincia de América Central\nLas primeras vocaciones centroamericanas de la congregación, procedieron del clero diocesano: P. Marcelino Méndez C.M. y Antonio Arévalo C.M. (guatemaltecos); P. Julio Pineda C.M, P. Guillermo Rojas C.M. y el P. Ramón Peña C.M. (salvadoreños); y el P. Timoteo   de Jesús Zepeda C.M. (nicaragüense). \n \nLa presencia de la Congregación de la Misión en El Salvador se remonta al año 1879. A petición de Mons. José Luis Cárcamo y Rodríguez, los misioneros José Vaysse, Julio Pineda y José Birot misionaron de 1879 a 1881 gran parte de la Diócesis salvadoreña.\n \nEl 5 de noviembre de 1898 llegaron a San Salvador los misioneros: Carlos Hetuin y Julio Pineda. Con la idea de fundar una casa de Misión, compraron un terreno en el pueblo de San Jacinto. Allí se construyó una casita,  que fue el punto de partida para giras misioneras y fue destruida por el terremoto de 1917.\n \nEl 12 de julio de 1919, Mons. Antonio Adolfo Pérez y Aguilar encomendó a la Congregación la capellanía de la iglesia del Barrio San Jacinto. Nuestro visitador era el P. Luis Durou Sure. También el 25 de enero de 1925 se bendijo el edificio de la Escuela Apostólica, construida por el P. Juan Thaureaud, y cuyo primer rector fue el P. Enrique Auerbach. En la década de los 30 inició el estudiantado en la Casa Provincial de Guatemala, el director era el P. Francisco Lagraula. Fueron muchas las generaciones egresadas de esta casa de formación. \n \nDel año 1959 a 1963 nuestros estudiantes de teología llevaron a cabo su formación en Estados Unidos y  Francia, retornando a los estudios en casa en el año de 1964. De 1983-1985, algunos jóvenes nuestros fueron enviados a la Provincia de Colombia para realizar sus estudios teológicos. Fue una experiencia efímera. De 1985 - 1991 estuvo la teología en la Casa Provincial. A partir de 1993 la etapa de teología se trasladó a la antigua Escuela Apostólica de San Salvador, hasta el año 2006, haciendo estudios en el Centro Monseñor Romero (UCA).\n \nA partir del año 2007, se inició la experiencia de Teología en la Provincia de Colombia (Funza, Cundinamarca), siendo Visitador el P. José Francisco Ramos C.M. El 8 de enero del año 2012 se inició nuevamente la etapa de teología en la casa de San Jacinto, actualmente, Casa P. Julio Pineda.  Realizando sus estudios en el Seminario San José de la Montaña. \n \nEn el 2015 se inició el proyecto inter-provincial (CLAPVI Norte) de la Etapa de Teología en la ciudad de México participando el estudiante William Guillén. Este proyecto no se llegó a concretizar porque no respondió a las expectativas de las Provincias involucradas.\nEn el 2017 se vuelve al Centro Monseñor Romero (UCA) para realizar los estudios teológicos.\n\nLa casa de Teología está constituida de la siguiente manera: Formadores: P. Miguel Ángel Aguilar Morán C.M., P. Francisco Alejandro Cortez C.M. y  José Cristóbal Villatoro C.M. (en experiencia pastoral). Estudiantes: Carlos Francisco Racanac Mateo C.M., Wilfredo Chicas Medina (cuarto año);  Oscar Efraín Ramírez García, Irbin Arquímides Menjivar Recinos, Larry José López Toruño (tercer año); José Roberto Top Xiquin  (segundo año); Jonathan Edenilson Montes Hernández, Marvin Antonio Gómez Gómez  (primer año).', 'Images/SeminariosImages/seminariopaul.jpg'),
(3, 'Seminario Interno San Juan Gabriel Perboyre', 'Los miembros de CLAPVI NORTE, en la búsqueda de continuar con el proceso de Reconfiguración, iniciado en julio de 2007, por medio de la experiencia interprovincial del Seminario Interno, trasladaron dicho proceso formativo a la Ciudad de Guatemala, el 15 de agosto de 2014. A partir de esta fecha han sido parte de la experiencia, seis generaciones integradas por candidatos de las diferentes provincias de CLAPVI NORTE. Estando a cargo de la formación: P. Aarón Gutiérrez C.M, P. Ignacio Martínez C.M, P. Juan Rodríguez Gaucin C.M y P. Emet Nolan C.M.\nDurante los seis años que el Seminario Interno ha tenido como sede Guatemala, sus servicios pastorales los ha desarrollado en el Vertedero (basurero) de zona tres de la capital de Guatemala, Asilo de Anciano Madre Teresa de Calcuta (a cargo de hermanas de Calcuta), Asilo de Ancianos Niño de Praga (a cargo de Hijas de la Caridad) y Pastoral Juvenil de la parroquia San Vicente de Paúl, teniendo sus misiones en las parroquias Vicentinas (Nuestra Señora de Guadalupe y San Antonio de Padua) de Petén, al norte de Guatemala, Dolores Petén y en El Merendón Honduras (Parroquia San Vicente de Paúl). ', 'Images/SeminariosImages/seminarioperboyre.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `ID` int(11) NOT NULL,
  `Imagenes` varchar(500) NOT NULL,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`ID`, `Imagenes`, `Estado`) VALUES
(1, 'Images/SliderImages/sliderImage1.jpg', 2),
(2, 'Images/SliderImages/sliderImage2.jpg', 2),
(3, 'Images/SliderImages/sliderImage3.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuarios`
--

CREATE TABLE `tipos_usuarios` (
  `Id_Tipo` int(11) NOT NULL,
  `Tipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_usuarios`
--

INSERT INTO `tipos_usuarios` (`Id_Tipo`, `Tipo`) VALUES
(1, 'Escritor'),
(2, 'Administrador'),
(3, 'Súper Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_Usuario` int(11) NOT NULL,
  `Pass` varchar(220) NOT NULL,
  `Nombre` varchar(220) NOT NULL,
  `Pais` varchar(220) NOT NULL,
  `Email` varchar(220) NOT NULL,
  `Tipo` int(11) NOT NULL DEFAULT 1,
  `Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_Usuario`, `Pass`, `Nombre`, `Pais`, `Email`, `Tipo`, `Estado`) VALUES
(14, '104bf393ae90eac7e3045a657d5adb84', 'René Blanco', 'El Salvador', 'Blanco2', 2, 1),
(15, '104bf393ae90eac7e3045a657d5adb84', 'René Blanco', 'El Salvador', 'Blanco', 1, 1),
(16, '104bf393ae90eac7e3045a657d5adb84', 'Fernando Blanco', 'El Salvador', 'Blanco3', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vinculos`
--

CREATE TABLE `vinculos` (
  `Id_Vinculo` int(11) NOT NULL,
  `Titulo` text NOT NULL,
  `Imagenes` varchar(500) NOT NULL,
  `Enlace` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vinculos`
--

INSERT INTO `vinculos` (`Id_Vinculo`, `Titulo`, `Imagenes`, `Enlace`) VALUES
(1, 'Corazón de Paul', 'Images/DefaultImages/corazonpaul.png', 'https://www.corazondepaul.org/'),
(2, 'Oficina de la familia vicenciana', 'Images/DefaultImages/famvin.png', 'https://famvin.org/es/'),
(3, 'Congregación de la misión', 'Images/DefaultImages/cm.png', 'https://cmglobal.org/es/'),
(4, 'Somos Vicencianos', 'Images/DefaultImages/vicentinos.png', 'http://vincentians.com/es/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vision`
--

CREATE TABLE `vision` (
  `Id_Vision` int(11) NOT NULL,
  `Texto` text NOT NULL,
  `Imagenes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vision`
--

INSERT INTO `vision` (`Id_Vision`, `Texto`, `Imagenes`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Images/DefaultImages/vision.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eco`
--
ALTER TABLE `eco`
  ADD PRIMARY KEY (`Id_Eco`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`Id_Estado`);

--
-- Indices de la tabla `evangelio`
--
ALTER TABLE `evangelio`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`Id_Historial`);

--
-- Indices de la tabla `mariologia`
--
ALTER TABLE `mariologia`
  ADD PRIMARY KEY (`Id_Mariologia`);

--
-- Indices de la tabla `mision`
--
ALTER TABLE `mision`
  ADD PRIMARY KEY (`Id_Mision`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`Id_Publicacion`),
  ADD KEY `Id_Usuario` (`Id_Usuario`);

--
-- Indices de la tabla `radio`
--
ALTER TABLE `radio`
  ADD PRIMARY KEY (`Id_Radio`);

--
-- Indices de la tabla `santoral`
--
ALTER TABLE `santoral`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`Id_Seccion`),
  ADD UNIQUE KEY `Id_Seccion` (`Id_Seccion`);

--
-- Indices de la tabla `seminarios`
--
ALTER TABLE `seminarios`
  ADD PRIMARY KEY (`Id_Seminario`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  ADD PRIMARY KEY (`Id_Tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_Usuario`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `Tipo` (`Tipo`),
  ADD KEY `Estado` (`Estado`);

--
-- Indices de la tabla `vinculos`
--
ALTER TABLE `vinculos`
  ADD PRIMARY KEY (`Id_Vinculo`);

--
-- Indices de la tabla `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`Id_Vision`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eco`
--
ALTER TABLE `eco`
  MODIFY `Id_Eco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `Id_Estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `Id_Historial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `mariologia`
--
ALTER TABLE `mariologia`
  MODIFY `Id_Mariologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mision`
--
ALTER TABLE `mision`
  MODIFY `Id_Mision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `Id_Publicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de la tabla `radio`
--
ALTER TABLE `radio`
  MODIFY `Id_Radio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `santoral`
--
ALTER TABLE `santoral`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
  MODIFY `Id_Seccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `seminarios`
--
ALTER TABLE `seminarios`
  MODIFY `Id_Seminario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  MODIFY `Id_Tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `vinculos`
--
ALTER TABLE `vinculos`
  MODIFY `Id_Vinculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vision`
--
ALTER TABLE `vision`
  MODIFY `Id_Vision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `publicaciones_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuarios` (`Id_Usuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Estado`) REFERENCES `estados` (`Id_Estado`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`Tipo`) REFERENCES `tipos_usuarios` (`Id_Tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
