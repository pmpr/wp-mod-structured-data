<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             639215328fdea             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use Pmpr\Common\Foundation\Decorator\Post\DecoratorAuthor; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use WP_Comment; use WP_Post; use WP_User; class Person extends Thing { public function __construct($ccamueccusigaaio = null, $goiqeyeaqmicqiky = true) { $this->isGlobal = true; if (!($ccamueccusigaaio && $goiqeyeaqmicqiky)) { goto msemumccgceyugmg; } $eeamcawaiqocomwy = null; $ymqmyyeuycgmigyo = null; if ($ccamueccusigaaio instanceof WP_Comment) { goto mwsmsguqqkcwiiuk; } if ($ccamueccusigaaio instanceof WP_Post) { goto eeauyscekuckoues; } if ($ccamueccusigaaio instanceof WP_User) { goto eogwckcymuugikuy; } goto owmuceyswmgueasi; mwsmsguqqkcwiiuk: $ymqmyyeuycgmigyo = ManipulateComment::mguqscccckuywsya($ccamueccusigaaio); if ($ccamueccusigaaio->user_id) { goto wakmayaoqoskekqy; } $ccamueccusigaaio = $ccamueccusigaaio->comment_author_email; goto qmuwoecuacmkwgem; wakmayaoqoskekqy: $eeamcawaiqocomwy = ManipulateComment::qkweigiqsaaigqau($ccamueccusigaaio); $ccamueccusigaaio = ManipulateUser::get($ccamueccusigaaio->user_id); qmuwoecuacmkwgem: goto owmuceyswmgueasi; eeauyscekuckoues: $qscaoekmoooeuyqg = ManipulatePost::mguqscccckuywsya($ccamueccusigaaio); $ymqmyyeuycgmigyo = ManipulatePost::ygwimyogyaqgumam($qscaoekmoooeuyqg); $eeamcawaiqocomwy = ManipulatePost::ekauksssqmmykouq($ccamueccusigaaio); $ccamueccusigaaio = ManipulateUser::get($qscaoekmoooeuyqg); goto owmuceyswmgueasi; eogwckcymuugikuy: $eeamcawaiqocomwy = DecoratorAuthor::mkaiaewoyaimieqg($ccamueccusigaaio); $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($ccamueccusigaaio); owmuceyswmgueasi: $this->usuqmwksoeaayaig($ymqmyyeuycgmigyo)->eyqkogeiqauioamw($eeamcawaiqocomwy)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($ccamueccusigaaio)); msemumccgceyugmg: parent::__construct($goiqeyeaqmicqiky); } }
