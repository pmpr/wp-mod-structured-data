<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a2f4651a433             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema; use WP_Comment; use WP_Post; use WP_User; class Person extends Thing { public function __construct($ccamueccusigaaio = null, $goiqeyeaqmicqiky = true) { $this->isGlobal = true; if (!($ccamueccusigaaio && $goiqeyeaqmicqiky)) { goto kqqiegkuqagcqsya; } $eeamcawaiqocomwy = null; $ymqmyyeuycgmigyo = null; if ($ccamueccusigaaio instanceof WP_Comment) { goto guykyqecgswcsmws; } if ($ccamueccusigaaio instanceof WP_Post) { goto kkumywowcoycymeo; } if ($ccamueccusigaaio instanceof WP_User) { goto miweggwqeiaeweia; } goto wyuemgggaqogsmsq; guykyqecgswcsmws: $iiyososeqgecqayy = $this->uwkmaywceaaaigwo()->yagekskwwyqosqcs(); $ymqmyyeuycgmigyo = $iiyososeqgecqayy->mguqscccckuywsya($ccamueccusigaaio); if ($ccamueccusigaaio->user_id) { goto oomguqikqokqwgku; } $ccamueccusigaaio = crc32($ccamueccusigaaio->comment_author_email); goto samwkqgwouggsguc; oomguqikqokqwgku: $eeamcawaiqocomwy = $iiyososeqgecqayy->qkweigiqsaaigqau($ccamueccusigaaio); $ccamueccusigaaio = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($ccamueccusigaaio->user_id); samwkqgwouggsguc: goto wyuemgggaqogsmsq; kkumywowcoycymeo: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $qscaoekmoooeuyqg = $seumokooiykcomco->mguqscccckuywsya($ccamueccusigaaio); $ymqmyyeuycgmigyo = $seumokooiykcomco->ygwimyogyaqgumam($qscaoekmoooeuyqg); $eeamcawaiqocomwy = $seumokooiykcomco->qkweigiqsaaigqau($ccamueccusigaaio); $ccamueccusigaaio = $this->caokeucsksukesyo()->issssuygyewuaswa()->get($qscaoekmoooeuyqg); goto wyuemgggaqogsmsq; miweggwqeiaeweia: $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($ccamueccusigaaio); $ymqmyyeuycgmigyo = $this->caokeucsksukesyo()->issssuygyewuaswa()->ygwimyogyaqgumam($ccamueccusigaaio); wyuemgggaqogsmsq: $this->usuqmwksoeaayaig($ymqmyyeuycgmigyo)->eyqkogeiqauioamw($eeamcawaiqocomwy)->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($ccamueccusigaaio)); kqqiegkuqagcqsya: parent::__construct($goiqeyeaqmicqiky); } }
