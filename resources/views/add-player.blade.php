<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team Sheets - Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<style>
    .fut-player-card {
        position: relative;
        width: 300px;
        height: 485px;
        background-image: url(https://selimdoyranli.com/cdn/fut-player-card/img/card_bg.png);
        background-position: center center;
        background-size: 100% 100%;
        background-repeat: no-repeat;
        padding: 1.8rem 0;
        z-index: 2;
        -webkit-transition: 200ms ease-in;
        -o-transition: 200ms ease-in;
        transition: 200ms ease-in;
    }

    .fut-player-card .player-card-top {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        color: #e9cc74;
        padding: 0 1.5rem;
    }

    .fut-player-card .player-card-top .player-master-info {
        position: absolute;
        line-height: 2.2rem;
        font-weight: 300;
        padding: 1.5rem 0;
        text-transform: uppercase;
    }

    .fut-player-card .player-card-top .player-master-info .player-rating {
        font-size: 2rem;
    }

    .fut-player-card .player-card-top .player-master-info .player-position {
        font-size: 1.4rem;
    }

    .fut-player-card .player-card-top .player-master-info .player-nation {
        display: block;
        width: 2rem;
        height: 25px;
        margin: 0.3rem 0;
    }

    .fut-player-card .player-card-top .player-master-info .player-nation img {
        width: 100%;
        height: 100%;
        -o-object-fit: contain;
        object-fit: contain;
    }

    .fut-player-card .player-card-top .player-master-info .player-club {
        display: block;
        width: 2.1rem;
        height: 40px;
    }

    .fut-player-card .player-card-top .player-master-info .player-club img {
        width: 100%;
        height: 100%;
        -o-object-fit: contain;
        object-fit: contain;
    }

    .fut-player-card .player-card-top .player-picture {
        width: 200px;
        height: 86px;
        margin: 0 auto;
        overflow: hidden;
    }

    .fut-player-card .player-card-top .player-picture img {
        width: 100%;
        height: 100%;
        -o-object-fit: contain;
        object-fit: contain;
        position: relative;
        right: -1.5rem;
        bottom: 0;
    }

    .fut-player-card .player-card-top .player-picture .player-extra {
        position: absolute;
        right: 0;
        bottom: -0.5rem;
        overflow: hidden;
        font-size: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        width: 100%;
        height: 2rem;
        padding: 0 1.5rem;
        text-align: right;
        background: none;
    }

    .fut-player-card .player-card-top .player-picture .player-extra span {
        margin-left: 0.6rem;
        text-shadow: 2px 2px #333;
    }

    .fut-player-card .player-card-bottom {
        position: relative;
    }

    .fut-player-card .player-card-bottom .player-info {
        display: block;
        padding: 0.3rem 0;
        color: #e9cc74;
        width: 90%;
        margin: 0 auto;
        height: auto;
        position: relative;
        z-index: 2;
    }

    .fut-player-card .player-card-bottom .player-info .player-name {
        width: 100%;
        display: block;
        text-align: center;
        font-size: 1.6rem;
        text-transform: uppercase;
        border-bottom: 2px solid rgba(233, 204, 116, 0.1);
        padding-bottom: 0.3rem;
        overflow: hidden;
    }

    .fut-player-card .player-card-bottom .player-info .player-name span {
        display: block;
        text-shadow: 2px 2px #111;
    }

    .fut-player-card .player-card-bottom .player-info .player-features {
        margin: 0.5rem auto;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .fut-player-card .player-card-bottom .player-info .player-features .player-features-col {
        border-right: 2px solid rgba(233, 204, 116, 0.1);
        padding: 0 2.3rem;
    }

    .fut-player-card .player-card-bottom .player-info .player-features .player-features-col span {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        font-size: 1.2rem;
        text-transform: uppercase;
    }

    .fut-player-card .player-card-bottom .player-info .player-features .player-features-col span .player-feature-value {
        margin-right: 0.3rem;
        font-weight: 700;
    }

    .fut-player-card .player-card-bottom .player-info .player-features .player-features-col span .player-feature-title {
        font-weight: 300;
    }

    .fut-player-card .player-card-bottom .player-info .player-features .player-features-col:last-child {
        border: 0;
    }
</style>

<section class="">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 vh-100 bg-danger text-center mx-auto">
                <h5 class="mt-2">Barca</h5>
                {{--                <a href="{{route('team' , 1)}}" class="btn btn-outline-light" id="add_1">Add Player</a>--}}
                <button class="btn btn-outline-light d-flex align-items-center justify-content-center mx-auto"
                        id="add_1">
                            <span class="spinner-border" role="status" style="scale: 0.5" id="spinner_1">

                            </span>
                    <span>Add Player</span>
                </button>

                <div class="row mt-5 team_content_1">

                </div>
            </div>
            <div class="col-lg-6 vh-100 bg-primary text-center mx-auto">
                <h5 class="mt-2">Real Madrid</h5>
                <button class="btn btn-outline-light d-flex align-items-center justify-content-center mx-auto"
                        id="add_2">
                            <span class="spinner-border" role="status" style="scale: 0.5" id="spinner_2">

                            </span>
                    <span>Add Player</span>
                </button>

                <div class="row mt-5 team_content_2">

                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
@vite('resources/js/app.js')

<script type="module">
    $(document).ready(function () {
        $('#spinner_1').hide();
        $("#add_1").click(function () {
            $('#spinner_1').show();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('team' , 1) }}",
                type: 'GET',
                dataType: 'json',
                success: function (result) {
                    $('#spinner_1').hide();
                }
            });
        })

        $('#spinner_2').hide();
        $("#add_2").click(function () {
            $('#spinner_2').show();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('team' , 2) }}",
                type: 'GET',
                dataType: 'json',
                success: function (result) {
                    $('#spinner_2').hide();
                }
            });
        });

            var channel = Echo.channel('golden');
            channel.listen('.golden_sport', function (team) {
                if (team.num == 1) {
                    $(".team_content_1").append(
                        `
                   <div class="col-12 col-md-4">

                           <div class="card">
                           <div class="fut-player-card" style="width: 100%;height: 100%;background: red">
                               <div class="player-card-top">
                                   <div class="player-master-info">
                                       <div class="player-rating">
                                           <span>97</span>
                                       </div>
                                       <div class="player-position">
                                           <span>RW</span>
                                       </div>
                                   </div>
                                   <div class="player-picture">
                                       <img src="https://selimdoyranli.com/cdn/fut-player-card/img/messi.png" alt="Messi"
                                            draggable="false"/>
                                       <div class="player-extra">
                                           <span>4*SM</span>
                                           <span>4*WF</span>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           </div>
                       </div>`
                    )
                } else if (team.num == 2) {

                    $(".team_content_2").append(
                        `
                   <div class="col-12 col-md-4">

                           <div class="card">
                           <div class="fut-player-card" style="width: 100%;height: 100%;background: white">
                               <div class="player-card-top">
                                   <div class="player-master-info">
                                       <div class="player-rating">
                                           <span>94</span>
                                       </div>
                                       <div class="player-position">
                                           <span>RW</span>
                                       </div>
                                   </div>
                                   <div class="player-picture">
                                       <img src="https://sortitoutsidospaces.b-cdn.net/megapacks/cutoutfaces/originals/6.03/735216.png" alt="ronaldo"
                                            draggable="false"/>
                                       <div class="player-extra">
                                           <span>4*SM</span>
                                           <span>4*WF</span>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           </div>
                       </div>`
                    )

                }
            });
        });
</script>
</body>
</html>
