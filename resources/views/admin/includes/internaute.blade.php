<div class="box box-success">
    <div class="box-header">
    </div>
    <div class="box-body">
        <ul>
            <h3 class="box-title" style="margin-bottom: 20px;">Bonjour {{ Auth::user()->name }}.
                Vous êtes inscrit sur notre site car vous souhaitez participer à l'aventure. Et nous vous en remercions.
            </h3>
            <p>
                Vous pouvez dès maintenant vous inscrire à notre newsletter :
                <a href="{{ route('admin.internaute.newsletter') }}">
                    <i class="fa fa-newspaper-o text-success"></i>
                    <span style="color: #444;">Insription à la newsletter</span>
                </a>
            </p>
            <p>
                Vous pouvez dès maintenant gérer votre profil :
                <a href="{{ route('admin.profil', ['id' => Auth::user()->id]) }}">
                    <i class="fa fa-user text-success"></i>
                    <span style="color: #444;">Gérer votre profil</span>
                </a>
            </p>
        </ul>
    </div>
    <!-- /.box-body -->
    <!-- /.box-footer-->
</div>