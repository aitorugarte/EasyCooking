<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fi', array (
  'validators' => 
  array (
    'This value should be false.' => 'Arvon tulee olla epätosi.',
    'This value should be true.' => 'Arvon tulee olla tosi.',
    'This value should be of type {{ type }}.' => 'Arvon tulee olla tyyppiä {{ type }}.',
    'This value should be blank.' => 'Arvon tulee olla tyhjä.',
    'The value you selected is not a valid choice.' => 'Arvon tulee olla yksi annetuista vaihtoehdoista.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Sinun tulee valita vähintään {{ limit }} vaihtoehtoa.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Sinun tulee valitan enintään {{ limit }} vaihtoehtoa.',
    'One or more of the given values is invalid.' => 'Yksi tai useampi annetuista arvoista on virheellinen.',
    'This field was not expected.' => 'Tässä kentässä ei odotettu.',
    'This field is missing.' => 'Tämä kenttä puuttuu.',
    'This value is not a valid date.' => 'Annettu arvo ei ole kelvollinen päivämäärä.',
    'This value is not a valid datetime.' => 'Annettu arvo ei ole kelvollinen päivämäärä ja kellonaika.',
    'This value is not a valid email address.' => 'Annettu arvo ei ole kelvollinen sähköpostiosoite.',
    'The file could not be found.' => 'Tiedostoa ei löydy.',
    'The file is not readable.' => 'Tiedostoa ei voida lukea.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Tiedostonkoko ({{ size }} {{ suffix }}) on liian iso. Suurin sallittu tiedostonkoko on {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Tiedostotyyppi ({{ type }}) on virheellinen. Sallittuja tiedostotyyppejä ovat {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Arvon tulee olla {{ limit }} tai vähemmän.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Liian pitkä syöte. Syöte saa olla enintään {{ limit }} merkkiä.',
    'This value should be {{ limit }} or more.' => 'Arvon tulee olla {{ limit }} tai enemmän.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Liian lyhyt syöte. Syötteen tulee olla vähintään {{ limit }} merkkiä.',
    'This value should not be blank.' => 'Kenttä ei voi olla tyhjä.',
    'This value should not be null.' => 'Syöte ei voi olla null.',
    'This value should be null.' => 'Syötteen tulee olla null.',
    'This value is not valid.' => 'Virheellinen arvo.',
    'This value is not a valid time.' => 'Annettu arvo ei ole kelvollinen kellonaika.',
    'This value is not a valid URL.' => 'Annettu arvo ei ole kelvollinen URL-osoite.',
    'The two values should be equal.' => 'Kahden annetun arvon tulee olla samat.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Annettu tiedosto on liian iso. Suurin sallittu tiedostokoko on {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Tiedosto on liian iso.',
    'The file could not be uploaded.' => 'Tiedoston siirto epäonnistui.',
    'This value should be a valid number.' => 'Tämän arvon tulee olla numero.',
    'This file is not a valid image.' => 'Tämä tiedosto ei ole kelvollinen kuva.',
    'This is not a valid IP address.' => 'Tämä ei ole kelvollinen IP-osoite.',
    'This value is not a valid language.' => 'Tämä arvo ei ole kelvollinen kieli.',
    'This value is not a valid locale.' => 'Tämä arvo ei ole kelvollinen kieli- ja alueasetus (locale).',
    'This value is not a valid country.' => 'Tämä arvo ei ole kelvollinen maa.',
    'This value is already used.' => 'Tämä arvo on jo käytetty.',
    'The size of the image could not be detected.' => 'Kuvan kokoa ei voitu tunnistaa.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Kuva on liian leveä ({{ width }}px). Sallittu maksimileveys on {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Kuva on liian kapea ({{ width }}px). Leveyden tulisi olla vähintään {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Kuva on liian korkea ({{ width }}px). Sallittu maksimikorkeus on {{ max_width }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Kuva on liian matala ({{ height }}px). Korkeuden tulisi olla vähintään {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Tämän arvon tulisi olla käyttäjän tämänhetkinen salasana.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Tämän arvon tulisi olla tasan yhden merkin pituinen.|Tämän arvon tulisi olla tasan {{ limit }} merkkiä pitkä.',
    'The file was only partially uploaded.' => 'Tiedosto ladattiin vain osittain.',
    'No file was uploaded.' => 'Tiedostoa ei ladattu.',
    'No temporary folder was configured in php.ini.' => 'Väliaikaishakemistoa ei ole asetettu php.ini -tiedostoon.',
    'Cannot write temporary file to disk.' => 'Väliaikaistiedostoa ei voitu kirjoittaa levylle.',
    'A PHP extension caused the upload to fail.' => 'PHP-laajennoksen vuoksi tiedoston lataus epäonnistui.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Tässä ryhmässä tulisi olla yksi tai useampi elementti.|Tässä ryhmässä tulisi olla vähintään {{ limit }} elementtiä.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Tässä ryhmässä tulisi olla enintään yksi elementti.|Tässä ryhmässä tulisi olla enintään {{ limit }} elementtiä.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Tässä ryhmässä tulisi olla tasan yksi elementti.|Tässä ryhmässä tulisi olla enintään {{ limit }} elementtiä.',
    'Invalid card number.' => 'Virheellinen korttinumero.',
    'Unsupported card type or invalid card number.' => 'Tätä korttityyppiä ei tueta tai korttinumero on virheellinen.',
    'This field group should not contain extra fields.' => 'Tämä kenttäryhmä ei voi sisältää ylimääräisiä kenttiä.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Ladattu tiedosto on liian iso. Ole hyvä ja lataa pienempi tiedosto.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF tarkiste on virheellinen. Ole hyvä ja yritä lähettää lomake uudestaan.',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Luo uusi %entity_name%',
    'show.page_title' => '%entity_name% (#%entity_id%)',
    'edit.page_title' => 'Muokkaa %entity_name% (#%entity_id%)',
    'list.page_title' => '%entity_name%',
    'search.page_title' => '{0} Ei tuloksia|{1} <strong>1</strong> tulos löytyi|]1,Inf] <strong>%count%</strong> tulosta löytyi',
    'search.no_results' => 'Tuloksia ei löytynyt.',
    'list.row_actions' => 'Toiminnot',
    'paginator.first' => 'Ensimmäinen',
    'paginator.previous' => 'Edellinen',
    'paginator.next' => 'Seuraava',
    'paginator.last' => 'Viimeinen',
    'paginator.counter' => 'Tulokset <strong>%start%</strong> - <strong>%end%</strong>, yhteensä <strong>%results%</strong>',
    'label.true' => 'Kyllä',
    'label.false' => 'Ei',
    'label.empty' => 'Tyhjä',
    'label.null' => 'Ei asetettu',
    'label.nullable_field' => 'Jätä tyhjäksi',
    'label.object' => 'PHP-objekti',
    'label.inaccessible' => 'Ei saatavilla',
    'label.inaccessible.explanation' => 'Arvo ei ole julkinen, tai sille ei ole asetettu get-metodia',
    'user.logged_in_as' => 'Kirjautunut käyttäjänä',
    'user.unnamed' => 'Nimetön käyttäjä',
    'user.anonymous' => 'Tuntematon käyttäjä',
    'user.signout' => 'Ulos',
    'toggle_navigation' => 'Navigoinnin näkyvyys',
    'delete_modal.title' => 'Oletko varma että haluat poistaa tämän?',
    'delete_modal.content' => 'Toimintoa ei voi peruuttaa.',
    'delete_modal.action' => 'Poista',
    'action.add_new_item' => 'Luo uusi rivi',
    'action.add_another_item' => 'Luo toinen rivi',
    'action.remove_item' => 'Poista rivi',
    'errors' => 'Virhe|Virheet',
    'form.are_you_sure' => 'Et ole tallentanut muuttamiasi tietoja.',
    'show.remaining_items' => '{1} On olemassa myös toinen rivi joka ei ole näkyvillä listauksessa|]1,Inf] Yhteensä %count%  muuta rivia jotka eivät ole näkyvillä listauksessa',
  ),
  'messages' => 
  array (
    'action.new' => 'Lisää uusi %entity_name%',
    'action.show' => 'Näytä',
    'action.edit' => 'Muokkaa',
    'action.search' => 'Etsi',
    'action.delete' => 'Poista',
    'action.save' => 'Tallenna muutokset',
    'action.cancel' => 'Peruuta',
    'action.list' => 'Takaisin listaan',
    'label.form.empty_value' => 'Ei mitään',
    '__name__label__' => '__name__label__',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Crear %entity_name%',
    'show.page_title' => '%entity_name% (#%entity_id%)',
    'edit.page_title' => 'Modificar %entity_name% (#%entity_id%)',
    'list.page_title' => '%entity_name%',
    'search.page_title' => '{0} No se han encontrado resultados|{1} <strong>1</strong> resultado|]1,Inf] <strong>%count%</strong> resultados',
    'search.no_results' => 'No se han encontrado resultados.',
    'list.row_actions' => 'Acciones',
    'paginator.first' => 'Primera',
    'paginator.previous' => 'Anterior',
    'paginator.next' => 'Siguiente',
    'paginator.last' => 'Última',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> de <strong>%results%</strong>',
    'label.true' => 'Si',
    'label.false' => 'No',
    'label.empty' => 'Vacío',
    'label.null' => 'Null',
    'label.nullable_field' => 'Dejar vacío',
    'label.object' => 'Objecto PHP',
    'label.inaccessible' => 'Inaccesible',
    'label.inaccessible.explanation' => 'Este campo no tiene un método getter o la propiedad asociada no es pública',
    'user.logged_in_as' => 'Conectado/a como',
    'user.unnamed' => 'Usuario sin nombre',
    'user.anonymous' => 'Usuario anónimo',
    'user.signout' => 'Cerrar sesión',
    'toggle_navigation' => 'Turnar navegación',
    'delete_modal.title' => '¿Realmente quieres borrar este elemento?',
    'delete_modal.content' => 'Esta acción no se puede deshacer.',
    'delete_modal.action' => 'Borrar',
    'action.add_new_item' => 'Añadir un elemento',
    'action.add_another_item' => 'Añadir otro elemento',
    'action.remove_item' => 'Eliminar este elemento',
    'errors' => 'Error|Errores',
    'form.are_you_sure' => 'No has guardado los cambios realizados en este formulario.',
    'show.remaining_items' => '{1} existe otro elemento que no se muestra en este listado|]1,Inf] existen otros %count% elementos que no se muestran en este listado',
    'exception.entity_not_found' => 'Este elemento ya no está disponible.',
    'exception.entity_remove' => 'Este elemento no se puede eliminar porque otros elementos dependen de él.',
    'exception.forbidden_action' => 'No se puede realizar la acción solicitada en este elemento.',
    'exception.no_entities_configured' => 'La aplicación no está configurada correctamente.',
    'exception.undefined_entity' => 'La aplicación no está configurada correctamente para este tipo de elementos.',
  ),
  'messages' => 
  array (
    'action.new' => 'Crear %entity_name%',
    'action.show' => 'Ver',
    'action.edit' => 'Modificar',
    'action.search' => 'Buscar',
    'action.delete' => 'Borrar',
    'action.save' => 'Guardar cambios',
    'action.cancel' => 'Cancelar',
    'action.list' => 'Volver al listado',
    'label.form.empty_value' => 'Ninguno',
    '__name__label__' => '__name__label__',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);

return $catalogue;
