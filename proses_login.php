<?php
                                    include("connection.php");
                                    if (isset($_POST['submit'])) {
                                        $user = mysqli_real_escape_string($mysqli, $_POST['username']);
                                        $pass = mysqli_real_escape_string($mysqli, $_POST['password']);

                                        if ($user == "" || $pass == "") {
                                            echo "<script language=javascript>
                                    alert('Username atau Password Kosong');
                                    window.location='login.php';
                                </script>";
                                        } else {
                                            $result = mysqli_query($mysqli, "SELECT * FROM `admin` 
                                WHERE username='$databaseUsername' AND password=md5('$databasePassword')")
                                                or die("Instruksi tidak ditemukan");
                                            $row = mysqli_fetch_assoc($result);

                                            if (is_array($row) && !empty($row)) {
                                                $validuser = $row['username'];
                                                $_SESSION['valid'] = $validuser;
                                                $_SESSION['id'] = $row['id'];
                                            } else {
                                                echo "<script language=javascript>
                                            alert('Username atau Password salah');
                                            window.location='login.php';
                                        </script>";
                                            }
                                            if (isset($_SESSION['valid'])) {
                                                header('Location: dashboard.php');
                                            }
                                        }
                                    } else {
                                        echo 'test';
                                    }