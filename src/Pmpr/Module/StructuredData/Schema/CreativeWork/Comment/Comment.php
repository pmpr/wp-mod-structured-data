<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4b4be803a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork\Comment; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\StructuredData\Schema\CreativeWork\CreativeWork; use Pmpr\Module\StructuredData\Schema\Intangible\Rating\Rating; use Pmpr\Module\StructuredData\Schema\Person; class Comment extends CreativeWork { public function __construct($comment = null, $goiqeyeaqmicqiky = true) { if ($goiqeyeaqmicqiky && $comment) { $kuowggqsyksiyygi = $this->caokeucsksukesyo()->yagekskwwyqosqcs(); $qqyuqswckkcomeak = $this->ocksiywmkyaqseou("\x72\141\x74\151\156\147\x5f\147\145\164\137\x76\141\x6c\165\145", [], $kuowggqsyksiyygi->cikwsikikwcmqwou($comment)); $aokagokqyuysuksm = $kuowggqsyksiyygi->iooowgsqoyqseyuu($comment); $this->oyecyiciiuqooyio(new Person($comment))->ykumikyaccuwocyw((new Rating())->squsoiakemiuoouq($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qqyuqswckkcomeak, Constants::yewgggaqoacewaai, 0))->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->ggiaseqygioygumq($aokagokqyuysuksm)))->ogoesumqawygewou($kuowggqsyksiyygi->squyiyimquqicqke($comment, "\x59\55\x6d\55\x64\x20\x48\72\x69\72\x73", false))->gucwmccyimoagwcm($this->uwkmaywceaaaigwo()->yagekskwwyqosqcs()->ykgcioecqcwwkime($comment))->iaqckqwoiseyqaku($this->cyamgsaeyiqasmcc()->oockkiieqcwiocga($comment)->ggiaseqygioygumq($aokagokqyuysuksm)); } parent::__construct($goiqeyeaqmicqiky); } }
