<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6554af2fcfcfa             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Traits; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Module\StructuredData\Schema\Thing; trait CommonTrait { public function ycqquoiyyuesegsy($sycgeiyakseiumqy = false, $yyimiwcuegayoskq = null) : string { if ($sycgeiyakseiumqy) { goto kocqqoyymosmuksu; } if ($yyimiwcuegayoskq) { goto iuuuususuuuaieem; } $yyimiwcuegayoskq = ManipulatePage::iqoacwuiemooiysg(); iuuuususuuuaieem: $migiiksoiymissge = $yyimiwcuegayoskq->ycqquoiyyuesegsy(); goto uqokiksoqcwwqgio; kocqqoyymosmuksu: $migiiksoiymissge = ManipulateServer::gmigwwwmwemyaayy(); uqokiksoqcwwqgio: return (string) $this->ocksiywmkyaqseou("\155\x61\x72\x6b\x75\160\137\160\145\x72\155\141\x6c\151\x6e\153", $migiiksoiymissge); } public function yuaukuikuewwqumk($aaqqkgyougeiueyq, $qscuacuysiqsossk = false) { if (!$aaqqkgyougeiueyq instanceof Thing) { goto qukocuwgakemmyga; } $sqeykgyoooqysmca = strtolower($aaqqkgyougeiueyq->gueasuouwqysmomu()); $aaqqkgyougeiueyq = $this->ocksiywmkyaqseou(self::ocmiuacywmgycowk . "\x62\x65\x66\157\162\145\x5f\162\x65\x6e\x64\x65\x72\137\163\x63\150\145\x6d\141", $aaqqkgyougeiueyq); $aaqqkgyougeiueyq = $this->ocksiywmkyaqseou(self::ocmiuacywmgycowk . "\142\x65\146\157\x72\145\x5f\162\x65\x6e\x64\145\x72\137{$sqeykgyoooqysmca}\x5f\163\x63\x68\145\x6d\141", $aaqqkgyougeiueyq); $aaqqkgyougeiueyq = $aaqqkgyougeiueyq->kmykkqwsssqqmwmg([], $this->kwauqaweosgcsimi()); qukocuwgakemmyga: if (!('' !== $aaqqkgyougeiueyq && !is_null($aaqqkgyougeiueyq))) { goto ieqesiiageaauiuw; } if ($qscuacuysiqsossk) { goto sioekkmekwygemyc; } ManipulateHTML::awwqwouuoioauoaw("\163\x63\x72\151\160\164", [self::squoamkioomemiyi => self::amgecouwceeaomww], true, "{$aaqqkgyougeiueyq}\12"); goto yiowgigkkwsoqcci; sioekkmekwygemyc: $mymggmkssycumueo[] = ManipulateString::queuakuqucciemcc($aaqqkgyougeiueyq); yiowgigkkwsoqcci: ieqesiiageaauiuw: if (!($qscuacuysiqsossk && !empty($mymggmkssycumueo))) { goto iesekaeqeomeuaui; } if (!(1 === count($mymggmkssycumueo))) { goto gamqcwuwkikwqoay; } $mymggmkssycumueo = reset($mymggmkssycumueo); gamqcwuwkikwqoay: if (ManipulateSetting::esoowymaimwcuecq()) { goto mscyggqcesgqqksu; } $qiouiwasaauyaaue = JSON_UNESCAPED_SLASHES; goto oyeyomcgkmgymogq; mscyggqcesgqqksu: $qiouiwasaauyaaue = JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT; oyeyomcgkmgymogq: print ManipulateString::wegeuqkaeuusoike($mymggmkssycumueo, $qiouiwasaauyaaue); iesekaeqeomeuaui: } }