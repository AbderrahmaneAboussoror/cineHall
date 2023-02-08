<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/style.css" />

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Sofia+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
</head>

<body style="background-color: rgb(0, 0, 0)">

    <div class="modal fade bg-dark" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sign In</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="formlogin">

                        <!-- Email input -->
                        <div class="form-outline">
                            <span id="emailER"></span>
                            <label class="form-label mt-4" for="form3Example3">Numéro</label>
                            <input type="number" name="email" id="email" class="form-control mt-1 mb-4"
                                placeholder="Votre numéro" required />
                        </div>

                        <!-- Checkbox -->
                        <!-- <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
              <label class="form-check-label" for="form2Example33">
              Subscribe to our newsletter
              </label>
          </div> -->

                        <!-- Submit button -->
                        <button type="submit" name="submitSI" class="btn btn-dark mt-2 btn-block mb-4 w-25"
                            style="color: white;" onclick="validate(event)">
                            Sign in
                        </button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a data-bs-dismiss="modal" data-bs-toggle="modal"
                                    href="#exampleModalToggle2" role="button"
                                    style="color: rgb(255, 48, 48);">Register</a></p>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sign Up</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post">

                        <div class="form-outline mb-4">
                            <input type="text" name="nom" id="form3Example3" class="form-control"
                                placeholder="First Name" required />
                            <label class="form-label" for="form3Example3">Nom</label>
                        </div>

                        <!-- prenom input -->
                        <div class="form-outline mb-4">
                            <input type="text" name="prenom" id="form3Example4" class="form-control"
                                placeholder="Last Name" required />
                            <label class="form-label" for="form3Example4">Prenom</label>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="form3Example3" class="form-control"
                                placeholder="Email address" required />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form3Example4" class="form-control"
                                placeholder="Password" required />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <!-- Checkbox -->
                        <!-- <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
              <label class="form-check-label" for="form2Example33">
              Subscribe to our newsletter
              </label>
          </div> -->

                        <!-- Submit button -->
                        <button type="submit" name="submitSU" class="btn btn-danger btn-block mb-4 w-25"
                            style="color: white;">
                            Sign up
                        </button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Already a member? <a data-bs-dismiss="modal" data-bs-toggle="modal"
                                    href="#exampleModalToggle" role="button" style="color: rgb(255, 48, 48);">Sign
                                    in</a>
                            </p>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>



    <nav class="p-4">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="text-light">cineHall</div>

            <div class="d-flex gap-3">
                <a href="#" class="text-decoration-none text-light">Home</a>
                <a href="#" class="text-decoration-none text-light">Reservation</a>
            </div>

            <div class="d-flex gap-3">
                <a href="#" class="text-decoration-none text-light" data-bs-toggle="modal"
                    data-bs-target="#exampleModalToggle">Sign In</a>
                <a href="#" class="text-decoration-none text-light" data-bs-toggle="modal"
                    data-bs-target="#exampleModalToggle2">Sign Up</a>
            </div>
        </div>
    </nav>