{{-- <link rel="stylesheet" href="/frontend/web/css/jquery.countdown.css" />
<script src="/frontend/web/js/jquery.countdown.js"></script>
<script src="/frontend/web/js/expQueue.js"></script>
<!-- <link rel="stylesheet" href="/frontend/web/css/leftPanel.css"/> -->
<!-- JavaScript includes --> --}}
<style type="text/css">
    .cont {
        width: auto;
        padding-left: 45px !important;
    }
    @media (max-width: 900px) {
    #experiments-container, .cont {
        padding-right: 50px;
        margin-left: 80px;
        padding-left: 15px !important;
    }
    }

    #editor, #output {
        min-width: 100%;
        max-width: 100%;
        min-height: 100%;
        max-height: 480px;
        background-color: white;
        font-size: 14px;
    }
    #webcam {
        background-color: black;
        border-radius: 5px;
        width: 100%;
        max-width: 640px;
        max-height: 480px;
    }
    .col-md-6 {
        padding: 10px;
    }
    .block img {
        display: inline-block;
    }
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }
    .text {
        display: block;
    }
</style>
<div class="content-wrapper">
    <section class="content">
        <div id="experiments-container">
            <div class="container cont">
                <div class="col-md-6 code" style="height:360px">
                    <pre id="editor"><?php if(isset($file)) echo $file ?></pre>
                </div>
                <div class="col-md-6">
                    <div class="jsmpeg" data-url="wss://swed.zntu.edu.ua/reldesvideo"></div>
                    <script type="text/javascript" src="/frontend/web/js/jsmpeg/jsmpg.js"></script>
                    </div>
                    <div class="col-md-6">
                        <form method="POST" action="/experiment/" enctype="multipart/form-data">
                            <div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-primary btn-file">
                                            {{ trans("all.browse") }} <input type="file" id="fileInput" name="userfile">
                                        </span>
                                    </span>
                                    <input class="form-control" readonly="" type="text" id="selectedFile">
                                </div>
                            </div>
                        </form>
                        <p></p>
                </div>
                <div class="col-md-6" style="text-align: center; padding-top:10px; padding-bottom:0">
                    <?php if(isset($buttons)) echo $buttons; ?>
                    <input type="hidden" id="sendFile"></div>
                    <button id="push" class="btn btn-primary">{{ trans("all.start") }}</button>
                    <button id="send" class="btn btn-primary" style="display: none">{{ trans("all.send") }}</button>
                    <button id="clean" class="btn btn-primary" style="display: none">{{ trans("all.clean") }}</button>
                </div>
                <div class="col-md-6" style="width: 100%; text-align: center;">
                    <div id="countdown" style="display: inline-block; font-size:32px;">
                </div>
            </div>
            <div class="container cont" style="padding: 10px 25px;">
                <pre class="code" id="output"><?php if(isset($result)) echo $result ?></pre>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>

            <script>
                var base_url = "/";
            </script>
            <!-- load ace -->
            <script src="/frontend/web/js/ace/ace.js"></script>
            <!-- load ace language tools -->
            <script src="/frontend/web/js/ace/ext-language_tools.js"></script>
            <script src="/frontend/web/js/views/experiments.js"></script>
            <script>
                $(document).on('change', '.btn-file :file', function() {
                    var input = $(this),
                    numFiles = input.get(0).files ? input.get(0).files.length : 1,
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                    input.trigger('fileselect', [numFiles, label]);
                });

                $(document).ready(function() {
                    $(".code").height($("#webcam").height());
                    // trigger extension
                    ace.require("ace/ext/language_tools");
                    var editor = ace.edit("editor");
                    editor.session.setMode("ace/mode/c_cpp");
                    editor.setTheme("ace/theme/textmate");

                    $('.ace_text-input').on('change keyup paste', function()
                    {
                        var editor = ace.edit('editor');
                        var code = editor.getSession().getValue();
                        $('#sendFile').val(code);
                    });

                    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
                        $('#selectedFile').val(label);
                    });

                    $('.queue-menu, .queue-menu-big').on('click', function () {
                        $('#sidebar').toggleClass('active');
                    });


                });
                $(window).resize(function() {
                    $(".code").height($("#webcam").height());
                });
            </script>
            <script>
                function sendCode(id){
                    $.ajax({
                        method: "POST",
                        url: "/frontend/web/experiments/compile?expId=" + id,
                        data: { file: $('#sendFile').val() }
                    })
                        .done(function( msg ) {
                        $('#output').text(msg);
                        });
                }
                $('#fileInput').change(function(){

                    var f = $('#fileInput')[0].files[0];

                if (f) {
                var r = new FileReader();
                r.onload = function(e) {
                    var contents = e.target.result;
                    var editor = ace.edit("editor");
                    editor.setValue(contents);
                    $('#sendFile').val(contents);
                }
                r.readAsText(f);
                } else {
                alert("Failed to load file");
                }



                });
            </script>

        </div>
    </section>
    </div>
</aside><!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class='control-sidebar-bg'></div>
