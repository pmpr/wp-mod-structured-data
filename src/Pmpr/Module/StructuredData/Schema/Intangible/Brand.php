<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63cc00380239d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\Intangible; use Pmpr\Module\StructuredData\Setting\Setting; class Brand extends Intangible { protected $logo = null; protected $review = null; protected ?string $slogan = null; protected $aggregateRating = null; public function __construct($goiqeyeaqmicqiky = true) { $this->isGlobal = true; if (!$goiqeyeaqmicqiky) { goto aueaceeyommgkicu; } $this->wqkwkoysgkaaewkc(Setting::gckekgcikugasqwu())->aayqioqmoaasosqc(get_bloginfo("\144\145\x73\x63\162\151\x70\164\151\157\x6e"))->usuqmwksoeaayaig(get_bloginfo("\x6e\141\x6d\x65"))->iaqckqwoiseyqaku()->ougqggyqmaemmkik(); aueaceeyommgkicu: parent::__construct($goiqeyeaqmicqiky); } public function oeaeiissukoeowwe() { return $this->aggregateRating; } public function nsqwikmawcqqyayk($gggmygsysokgmaiq) { $this->aggregateRating = $gggmygsysokgmaiq; return $this; } public function gckekgcikugasqwu() { return $this->logo; } public function wqkwkoysgkaaewkc($weowoqykiyuqcwam) { $this->logo = $weowoqykiyuqcwam; return $this; } public function yieewsuceqymoqeu() { return $this->review; } public function wacyaeigikuoaogy($qkcymeiwcsikkkkk) { $this->review = $qkcymeiwcsikkkkk; return $this; } public function qkmcugoswuqogqqk() { return $this->slogan; } public function aayqioqmoaasosqc($msmuuuiukkuoukoe) { $this->slogan = $msmuuuiukkuoukoe; return $this; } }
