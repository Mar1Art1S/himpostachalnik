<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_category_pages_render_successfully(): void
    {
        $urls = [
            '/dlya-gidroizolyatsii',
            '/dlya-lakofarbovoi-promislovosti',
            '/dlya-pinopoliuretana',
            '/dlya-poliuretanovogo-kamyanogo-kilima',
            '/dlya-poliuretanu',
            '/efekt-mokrogo-kamenyu',
            '/poliuretanovi-klei',
            '/virobi-z-livarnogo-poliuretanu',
        ];

        foreach ($urls as $url) {
            $response = $this->get($url);
            $response->assertStatus(200, "Failed to load {$url}");
        }
    }

    public function test_all_product_subcategory_pages_render_successfully(): void
    {
        $urls = [
            '/product/akrilovi-ta-akril-poliuretanovi-sopolimeri',
            '/product/antiseptiki',
            '/product/katalizatori',
            '/product/pigmentni-pasti-dlya-poliuretaniv',
            '/product/poliuretan-livarnij-kompaktnij',
            '/product/poliuretanova-pasta',
            '/product/poliuretanovi-elastomiri',
            '/product/poliuretanovi-klej-dlya-gumovoi-ta-epdm-krihti',
            '/product/poliuretanovi-klej-odnokomponentni-dlya-dereva-d4',
            '/product/poliuretanovi-klej-odnokomponentni-dlya-porolonu-mikrofibri-tekstilyu',
            '/product/poliuretanovi-klej-odnokomponentni-dlya-sendvich-panelej-ta-klinkernih-termopanelej',
            '/product/poliuretanovi-spoluchni-dlya-nalivnoi-pidlogi',
            '/product/poliuretanovij-klej-dvokomponentnij-dlya-budivelnih-materialiv',
            '/product/poliuretanovij-klej-dvokomponentnij-dlya-parketu-ta-zagalno-budivelnogo-priznachennya',
            '/product/poliuretanovij-klej-dvokomponentnij-dlya-shtuchnoi-travi',
            '/product/polymochevyna-haryachoho-nanesennya',
            '/product/polymochevyna-kholodnoho-nanesennya',
            '/product/ppu-dlya-dekoru-ta-negabaritnih-virobiv',
            '/product/ppu-dlya-napilennya',
            '/product/ppu-dlya-povitryanih-filtriv',
            '/product/ppu-dlya-shkarlupi',
            '/product/ppu-dlya-zalivannya-mizhstinnogo-prostoru',
            '/product/ppu-dlya-zalivki-sendvich-panelej',
            '/product/ppu-dlya-zmicznennya-vugilnogo-masivu',
            '/product/ppu-poperedno-izolovanih-trub',
            '/product/sikativi-ta-dispergatori',
            '/product/smoli-alkidno-modifikovani-ta-butoksilovani',
            '/product/vodorozchinni-klei-dlya-paperu-ta-kartonu',
        ];

        foreach ($urls as $url) {
            $response = $this->get($url);
            $response->assertStatus(200, "Failed to load {$url}");
        }
    }
}
