<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63cd00510bdd0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use WP_Comment; use WP_Post; use WP_User; class Person extends Thing { public function __construct($ccamueccusigaaio = null, $goiqeyeaqmicqiky = true) { $this->isGlobal = true; if (!($ccamueccusigaaio && $goiqeyeaqmicqiky)) { goto eucqomyqykgoiuge; } $eeamcawaiqocomwy = null; $ymqmyyeuycgmigyo = null; if ($ccamueccusigaaio instanceof WP_Comment) { goto qsgqwyqaqiowkmco; } if ($ccamueccusigaaio instanceof WP_Post) { goto yqagomygmeoecwey; } if ($ccamueccusigaaio instanceof WP_User) { goto qikaewekoecykeou; } goto gsygwgsiawgmqiyi; qsgqwyqaqiowkmco: $ymqmyyeuycgmigyo = ManipulateComment::mguqscccckuywsya($ccamueccusigaaio); if ($ccamueccusigaaio->user_id) { goto suqcsgaosywaauuu; } $ccamueccusigaaio = $ccamueccusigaaio->comment_author_email; goto wwukgaquuyoissgy; suqcsgaosywaauuu: $eeamcawaiqocomwy = ManipulateComment::qkweigiqsaaigqau($ccamueccusigaaio); $ccamueccusigaaio = ManipulateUser::get($ccamueccusigaaio->user_id); wwukgaquuyoissgy: goto gsygwgsiawgmqiyi; yqagomygmeoecwey: $qscaoekmoooeuyqg = ManipulatePost::mguqscccckuywsya($ccamueccusigaaio); $ymqmyyeuycgmigyo = ManipulatePost::ygwimyogyaqgumam($qscaoekmoooeuyqg); $eeamcawaiqocomwy = ManipulatePost::ekauksssqmmykouq($ccamueccusigaaio); $ccamueccusigaaio = ManipulateUser::get($qscaoekmoooeuyqg); goto gsygwgsiawgmqiyi; qikaewekoecykeou: $eeamcawaiqocomwy = DecoratorAuthor::mkaiaewoyaimieqg($ccamueccusigaaio); $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($ccamueccusigaaio); gsygwgsiawgmqiyi: $this->usuqmwksoeaayaig($ymqmyyeuycgmigyo)->eyqkogeiqauioamw($eeamcawaiqocomwy)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($ccamueccusigaaio)); eucqomyqykgoiuge: parent::__construct($goiqeyeaqmicqiky); } }
