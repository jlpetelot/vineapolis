<div class="box box-danger">
    <div class="box-header">
    </div>
    <div class="box-body">
        <ul>
            <h3 class="box-title" style="margin-bottom: 20px;">Bonjour <span style="color:#dd4b39">{{ Auth::user()->name }}</span>.
                Vous souhaitez être plus lisible sur le site Vineapolis.</h3>
            <p>
                &bull;&nbsp;Vous souhaitez bénéficier de notre système de référencement qui vous permettra d'être plus visible sur les moteurs de recherche,
                notamment sur Google.
                <br/>&bull;&nbsp;Vous souhaitez vous tenir informé quant à la concurrence, qui, grâce à notre contenu, nos cartes, nos reportages, tous exclusifs,
                constituent une veille de ce qui se fait ou de ce qui ne se fait pas en matière de vin.
                <br/>&bull;&nbsp;Vous souhaitez faire partie de l'aventure Vineapolis qui, dans un futur proche, nous en sommes certains, deviendra le guide incontournable du vin.
                <br/>&bull;&nbsp;Enfin, vous souhaitez que nombre d'internautes cliquent sur votre lien. Lien qui leur permettra de visiter votre site ;
                s'informer de la qualité de vos produits et, certainement, acheter.
            </p>
            <p>
                À cette fin, 3 options vous sont proposées.
                <br/>&bull;&nbsp;Option lisibilité et détail de votre activité : 25 € par an.
                <br/>&bull;&nbsp;Option lisibilité, détail de votre activité + reportage : 40 € par an.
                <br/>&bull;&nbsp;Option lisibilité, détail de votre activité + reportage + reportage vidéo : devis à part.
                <br/>Nous vous invitons dès maintenant à cliquer sur ce lien afin de compléter votre fiche et valider le choix de votre option.
            </p>
            @php
                $user = Auth::user()->id;
                $vigneron = \App\Vigneron::where('user_id', $user)->first();
                // $user->role = $vigneron->user->role;
                // dd($user);
            @endphp
            <li style="list-style-type: none">
                <a href="{{ url('/admin/vigneron/fiche'.'/'.$vigneron->user_id) }}">
                    <i class="fa fa-address-book-o text-red"></i>
                    <span style="color: #444;">Complétez votre fiche</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.box-body -->
    <!-- /.box-footer-->
</div>