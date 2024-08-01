<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Tous les messages</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Acceuil</a></li>
                        <li>/</li>
                        <li>Tous les messages</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-12 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            Toutes les messages
                                        </div>
                                        <div class="col-md-6">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">                                    
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nom</th>
                                                <th>Email</th>
                                                <th>Téléphone</th> 
                                                <th>Message</th>                                       
                                                <th>Date</th>                                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contacts as $contact)
                                                <tr>
                                                    <td>{{ $contact->id }}</td>                                                    
                                                    <td>{{ $contact->name }}</td>
                                                    <td>{{ $contact->email }}</td>                                                    
                                                    <td>{{ $contact->phone }}</td>                                                    
                                                    <td>{{ $contact->message }}</td>                                                    
                                                    <td>{{ $contact->created_at }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $contacts->links() }}
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
