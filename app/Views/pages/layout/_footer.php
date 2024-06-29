                <footer class="footer">

                    <div class="container-fluid">

                        <nav class="pull-left">

                            <ul class="nav">
                                
                                <li class="nav-item">

                                    <a class="nav-link" href="https://www.github.com/kitsumyuzu/"><i class="fa-brands fa-github fa-bounce mr-2" style="color: #000;"></i>Github</a>
                                    
                                </li>
                                
                                <li class="nav-item">
                                    
                                    <a class="nav-link" href="https://www.instagram.com/kitsumyuzu_store.id/"><i class="fa-brands fa-instagram fa-bounce mr-2" style="color: #000;"></i>Instagram</a>

                                </li>

                            </ul>

                        </nav>

                        <div class="copyright ml-auto">

                            <i class="fas fa-mug-hot mr-1" style="color: #724e2c;"></i> Copyright ©️ 2023 Kitsumyuzu Production

                        </div>

                    </div>

                </footer>

            </div>
            
        </div>

            <!-- Core JS Files -->

                <script src="<?= base_url('template') ?>/js/core/jquery.3.2.1.min.js"></script>
                <script src="<?= base_url('template') ?>/js/core/popper.min.js"></script>
                <script src="<?= base_url('template') ?>/js/core/bootstrap.min.js"></script>

            <!-- jQuery UI -->

                <script src="<?= base_url('template') ?>/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
                <script src="<?= base_url('template') ?>/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

            <!-- jQuery Scrollbar -->

                <script src="<?= base_url('template') ?>/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


            <!-- Chart JS -->

                <script src="<?= base_url('template') ?>/js/plugin/chart.js/chart.min.js"></script>

            <!-- jQuery Sparkline -->

                <script src="<?= base_url('template') ?>/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

            <!-- Chart Circle -->

                <script src="<?= base_url('template') ?>/js/plugin/chart-circle/circles.min.js"></script>

            <!-- Datatables -->

                <script src="<?= base_url('template') ?>/js/plugin/datatables/datatables.min.js"></script>

            <!-- Bootstrap Notify -->

                <script src="<?= base_url('template') ?>/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

            <!-- jQuery Vector Maps -->

                <script src="<?= base_url('template') ?>/js/plugin/jqvmap/jquery.vmap.min.js"></script>
                <script src="<?= base_url('template') ?>/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

            <!-- Sweet Alert -->

                <script src="<?= base_url('template') ?>/js/plugin/sweetalert/sweetalert.min.js"></script>

            <!-- Atlantis JS -->

                <script src="<?= base_url('template') ?>/js/atlantis.min.js"></script>

            <!-- Scripting -->

                <script type="text/javascript">

                    $(document).ready(function() {

                        $("#show-password").on('click', function(event) {

                            event.preventDefault();

                            if($('#password_input').attr("type") == "password") {

                                $('#password_input').attr('type', 'text');
                                $('.fa-eye-slash').addClass('fa-eye');
                                $('.fa-eye').removeClass('fa-eye-slash');

                            } else {

                                $('#password_input').attr('type', 'password');
                                $('.fa-eye').addClass('fa-eye-slash');
                                $('.fa-eye-slash').removeClass('fa-eye');

                            };

                        });

                    });

                    $(document).ready(function() {
                        
                        // Limit table shown 20 data

                            $('#limit-data-20').DataTable({

                                "info": false,
                                "dom": 'ftipr',
                                "ordering": false,
                                "pageLength": 20,

                            });

                        // Limit table shown 10 data

                            $('#limit-data-10').DataTable({

                                "info": false,
                                "dom": 'ftipr',
                                "ordering": false,
                                "pageLength": 10,

                            });

                    });

                    document.getElementById("profile_input").onchange = function() {

                        document.getElementById("image_preview").src = URL.createObjectURL(profile_input.files[0]);

                    }

                    document.addEventListener('DOMContentLoaded', function() {

                        function ucwords(str) {

                            return str.toLowerCase().replace(/\b[a-z]/g, function(letter) {

                                return letter.toUpperCase();

                            });

                        }

                        function updateName() {

                            const firstNameInput = document.getElementById('first_name_input').value;
                            const lastNameInput = document.getElementById('last_name_input').value;
                            const nameElement = document.querySelector('.name');

                            const fullName = `${ucwords(firstNameInput)} ${ucwords(lastNameInput)}`;

                            nameElement.textContent = fullName.trim() !== '' ? fullName : 'Anonymous';

                        }

                        const firstNameInput = document.getElementById('first_name_input');
                        const lastNameInput = document.getElementById('last_name_input');

                        firstNameInput.addEventListener('input', updateName);
                        lastNameInput.addEventListener('input', updateName);

                        // Job

                            const jobInput = document.getElementById('job_input');
                            const nameElementjob = document.querySelector('.job');

                            jobInput.addEventListener('input', function() {

                                nameElementjob.textContent = this.value ? ucwords(this.value) : 'Jobless';
                                
                            });

                        // Description

                            const descriptionInput = document.getElementById('description_input');
                            const nameElementdesc = document.querySelector('.desc');

                            descriptionInput.addEventListener('input', function() {

                                nameElementdesc.textContent = this.value ? this.value : 'No Description';
                                
                            });

                    });

                </script>

    </body>

    <style>

        /* Remove scroll bar */

        *::-webkit-scrollbar {

            display: none;

        }

        *::-webkit-file-upload-button {

            display: none;

        }

        .animated-text b {

            display: inline-block;
            vertical-align: middle;
            font-size: 24px;
            white-space: nowrap;
            overflow: hidden;
            border-right: 2px solid #000;
            animation: typing 2s steps(45), blinkCursor 0.5s infinite alternate;

        }

        @keyframes typing {

            from { width: 0; }
            to { width: 20%; }

        }

        @keyframes blinkCursor {

            to { border-color: transparent; }

        }

        .animated-text i {

            vertical-align: middle;
            font-size: 24px;
            animation: fadeIn 1s;

        }

        @keyframes fadeIn {

            from { opacity: 0; }
            to { opacity: 1; }

        }
        
    </style>

</html>