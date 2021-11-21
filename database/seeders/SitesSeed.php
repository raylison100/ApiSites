<?php

namespace Database\Seeders;

use App\Entities\InputTypes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SitesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->insertOrIgnore([
            [
                'id'         => 1,
                'name'       => 'Americanas',
                'link'       => 'https://cliente.americanas.com.br/simple-login/cadastro/pf?next=https%3A%2F%2Fwww.americanas.com.br%2F',
                'selector'   => '#root > div > div.sc-cqJjjq.kuSkzX > form',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 2,
                'name'       => 'Submarino',
                'link'       => 'https://cliente.submarino.com.br/simple-login/cadastro/pf?next=https%3A%2F%2Fwww.submarino.com.br%2F',
                'selector'   => '#root > div > div.cadastroForm-container > form',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 3,
                'name'       => 'Centauri Acrilicos',
                'link'       => 'https://www.acrilicoscentauri.com.br/cadastro',
                'selector'   => '#frm2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 4,
                'name'       => 'Casas Bahia',
                'link'       => 'https://carrinho.casasbahia.com.br/Checkout?Pagina=cadastrar&ReturnUrl=https://www.casasbahia.com.br&Email=raylison100@gmail.com#login',
                'selector'   => '#cliente_cadastro > form',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 5,
                'name'       => 'Amazon',
                'link'       => 'https://www.amazon.com.br/ap/register?showRememberMe=true&openid.pape.max_auth_age=0&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&pageId=brflex&openid.return_to=https%3A%2F%2Fwww.amazon.com.br%2Fgp%2Fyourstore%2Fhome%3Fie%3DUTF8%26action%3Dsign-out%26path%3D%252Fgp%252Fyourstore%252Fhome%26ref_%3Dnav_AccountFlyout_signout%26signIn%3D1%26useRedirectOnSuccess%3D1&prevRID=29156RHGADBX3DD1GD2G&openid.assoc_handle=brflex&openid.mode=checkid_setup&openid.ns.pape=http%3A%2F%2Fspecs.openid.net%2Fextensions%2Fpape%2F1.0&prepopulatedLoginId=&failedSignInCount=0&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0',
                'selector'   => '#ap_register_form',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 6,
                'name'       => 'Marabraz',
                'link'       => 'https://secure.marabraz.com.br/customer/account/create/',
                'selector'   => 'body > div.wrapper > div > div.main-container.col1-layout > div > div > div > div.container-content > div.customer-login-container-new-register-forms > form',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 7,
                'name'       => 'Pao de Açucar',
                'link'       => 'https://www.paodeacucar.com/user/register',
                'selector'   => '#__next > div > div > div.panel__Panel-oca82n-1.kWEhxH.slide-area__SlideArea-sc-6grnhi-3.evveVT.vertical.items-auto > div.panel__PanelItemWrap-oca82n-0.fWkiNX.slide-area__SlideAreaBody-sc-6grnhi-2.fZIwkt.pb2.pl2.pr2 > div.content-box__ContentBox-sc-7k9of1-0.kpOROi > div',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 8,
                'name'       => 'Leroy Merlin',
                'link'       => 'https://cliente.submarino.com.br/simple-login/cadastro/pf?next=https%3A%2F%2Fwww.submarino.com.br%2F',
                'selector'   => '#root > div > div.cadastroForm-container > form',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 9,
                'name'       => 'Drogaraia',
                'link'       => 'https://www.drogaraia.com.br/customer/account/create/',
                'selector'   => '#form-validate',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 10,
                'name'       => 'Farmacia Eficacia',
                'link'       => 'https://www.farmaciaeficacia.com.br/customer/account/create/',
                'selector'   => '#form-validate',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 11,
                'name'       => 'Gsuplementos',
                'link'       => 'https://www.gsuplementos.com.br/checkout/cadastro',
                'selector'   => '#formCadastroUsuario',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'         => 12,
                'name'       => 'Studio3t',
                'link'       => 'https://studio3t.com/download/?utm_source=adwords&utm_medium=ppc&utm_term=mongovue&utm_campaign=GS+%7C+Competitors+%7C+Brazil&hsa_net=adwords&hsa_ad=518216104937&hsa_src=g&hsa_ver=3&hsa_grp=58254892683&hsa_acc=1756351187&hsa_tgt=dsa-31120858817&hsa_mt=b&hsa_kw=mongovue&hsa_cam=1537319220&gclid=Cj0KCQjwt-6LBhDlARIsAIPRQcI15J-T8-IqfrQHQXFG1L8c-oig0pLfOxSXT4yDMbUA2Imf_FWy2R0aApMIEALw_wcB',
                'selector'   => '#form',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
