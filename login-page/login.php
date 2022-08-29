<?php
    include 'config.php';

    
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login & User</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <a href="https://icons8.com/icon/2mhXYLZct4Sd/monkas"></a>
 
  </head>
  <body>
<div class="image" style= "background-image: url('./image/meme1.jpg');">

<div class="container ">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-5 ">
        <?php
        if(isset($_GET['pesan'])) {
        ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Login Gagal</strong><?php echo $_GET['pesan']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

        <?php } ?>
        <div class="text-center py-3 ">
          <h2>Login Page</h2>
        </div>
          <div class="card rounded-5">
      <form action="ceklogin.php" method="post">
        <div class="card-body">

         <label for="username" class="form-label">name</label>
          <div class="input-group mb-3">
            <!--Image-->
              <span class="input-group-text" id="username">
                <img width="30px" height="30px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAANK0lEQVRoge2Ye3Dc1XXHP7/377erXb1Wb2RLsgUIGRvGBGIYKI6BmDQtuJQECIVCUpIMLUNaAi2loGkmLXQgnabTkBAopAmBNBBImhLALpiHYyBADdjyU/ghybJX2l3tS/t73/6xeluSVTpp/ojPzu79Pe499/s999xzzl04ISfkhJyQ36RIH2VQd8+VujyY/xs56/6BMup0UPJ12Qnl0FTCoEIthjXmVhFTv7r9weffnxzUg9w9eMmdctq5Xsl6rfKYr0sCgoSZdpvMv+196MVv/r8Q6P7CJX+vHyj8eVih6XZXFX5LhCCmIQwF2faRRxzMPVmM3Vnhtsd+sP2xjdd133TJV/QDxa+HmmTZp1XhtlYQxFUQAuPDAhVbkgRVRl+w1Dh7xz++kP61EOjuuVKXd6XeUFPOmau+eClb6ccOXAAEgBAz+iujLpXPHASJnOyKeO7CBpzlMSYGTPSOqDpXt13AU//8PbSUk3Oa4yt3PvLcwcXikhfVqwdZ6R3eJnvhmZnrlnPvp26mPdaAEAIhxBT4sExECIFfqTF6RRtKMYjnPlEGP9FVMHEhWNd8Bj1n/xH1nzkLp8WK64PZ7ctuu6R+sQQWtQKnX3/xj9TDxc9krusk1CUuaFhB3ivxwa4dmL2jqENjqCMOsh0AIHQZP2HgLqkgqDKw3hkhdW17eUI7QLbDMl9NIhqPsaF9DU/2vYLr+VS+NISaclPBEqVtx7c2F/7PBFbe/KlztPdSWzOfbZf8OhMAJeMQe2EQNedR6qrEba3ATxiEEaWs1BOoyRLmrizm3jwI8BMG2rBdBm7ISE6IFAqkQOBX6/i1Bm6dibMkSuytEaSS3/9BVulg82Z/IXzq8QgwUnrEPrWqDL7s7MR/1o+9sprMyuopE0zzJKGC22ThNlkUz6yh5kcHkOyA5HXthNb4lOOdRSDQ0i5qykE/alPznwPkz6rF2pVtPT3Btg9gxULwFlyBVV/5dIv6ZnIgfUMnfsXExBNvxXQcSG6A0ZendjBAH3bwsiV820WPWQSmjJ8pkju/kbEV8Qk7zNAzsxHITkjdMwO4NcazvT98acN8GBdegYHCd4JaEz+q8unWs/n5oTcnZ5mYX3IDan41ivXBKO1t7Vy0dh2ndXfT3NREPB6nWCwyMDDAL178BS+/splMyiV1fgKl5GPuzWMeGiNSEFD0CGyvDKrChFqT9JII0V25y0+74ZJbeh+dO0/MuwIrrr/4YXN39vPFVVW0b/g4X+76Xb78+r9MWU2AtStL4pcZzll9DtdedS0NTY1oqoKqqKiqgizLSJIElCNTsTjGn912K73GCNbePC3dy7l49e+w8tRuampqiEYiRCMR8oUcffv2sem1zbz60kt4YRCmT4m2HHhs85FFEVhx9dotWtI5N5Qh98lmvnbZzezPH+E7vc+VBwmIvXKUhiG4/ZbbWd7ZiaaqaFoZuKaqKIrCW2+9yQP3348kSdx221c562MfY2dvL7fcegu/98dXc9kFl2IaBrqmoWnqZPvO22/T39/PuosuwnEdbrzxBgqa3//uxi1LZmOdMw8oheDc1FVtKE5AUKWzvnU1Xzjlk2XbC0HlC4c52a7m73ruZWl7e9kK0oRFpPKvBN944AE0TWN4eJgHHrgfgNalSwn9gIvOuhBZkpDGv7IsIysy777zDnfccTtPP/0Ud/31ndTW1PJXf3knStZtnQvrnATSVy4htBRCUyU0ZG55/UH+Yut3EUIgF32s3TkaGxp5++23KBbyk5tSCMHkZ3yT3HHHHdM0Cz7s60OSJQLfm856nDYcOnSI9evXs2rVKg4dOgRINLe0IEIBPcfiVeYiEL9iVY9AMLayGoCDhSQH80lAIDQZe0mEQ7kke/fsZuO//5SxQpG2tjYsy0KS5EmrLm1byj/cdx/Lli3ji1/6EqZhcs/XehgNSsRaEnS2dKAoCooil1dAlmldchI/ffZZhoeHufqaz1FbW8Od99xFNptl6PHDPbOxzrkHTn3yJrGhfQ3/tue/puL15M+0CwFKIaDjfR9v51G6urs595w1rOjuprm5BU3TKBby7N6zm23btvH8phfJnhHH35/BGHY45dI1XLZ6HV3Ny7Ask3g8jixL5LKj7Nu7j42vvcTW17eQTyiEjn94x8+3tCyKwN1vfV/cfdY1LPvhjXihPxP9tKb+iQO4J0UonF5FGFEw9xepHPQwkg5h3kGEAs3SUetjjNZJDHcYVOzKEdmTJ7umFmtfAT3joZUEMpTDqCShRg1EtUmqQcJpNklsSlLqiN2067FN310UgVOe+BOxtnklPzvwBtOD/uRajN/LYz4V740S2Z1H6DKlVguv3sSr0QksmdBSEEhoKZfKt9PoQyXcZov0+QkCU5mha1KEmHykpVzqNyaxG40ndj3xyjVzYZ2TQPP3rpmN9ZhyefpECNCHHYzDY2hJBy3lotghoSExdFUr0Z15qn45QnptA2PtERDl8kGxQ+xmc6YugFAQ780T/+9RYbdFvrnzB5tvnQsnzJOJxXRk0zVPlMLT7ic6OHU6TkKf/gKl4FP92gjmgSIj6xuxm8xJ5VIgqH15GLdaw242EboMoUAt+ET2FpF9IYpd1rrd/7r55fnAw3znganCffxWTIZIxDg+Ub6YPA6M3yME8W1ZEs8dofGpAYQMR/7wpHHwU7qchM7hy5vQ0y5WfwltxEHL+gSaTPqCGkJDlkSgnbEQeJjHhZoevVqIY1xmyrIzXx27Ryp68wSWjNMSIdSkY9xt+oWa8ah/eYTBDY0z3lsDNjVbU67fUdW045H5j5nzuNB0RPOE0ZlBaQarQldsCvRcuqYZwKtSGby8cZq+su6xFoNonaFLo2P/AZw3H4EFXUjM4yKTnjTpalMgp9yNKVeb7W7TjpTTdYlpbosQpFdXYg7Za7o+f+G8Z4Ljb+JjGjGewHyMYRel4IMQhJaCF1XwqjRCU16crnncVAiIDJSo2F9CaLIkJ71/AtYtmsBCsV8KBE2vJjH3j9Eet2lSbUIkUoFO2lXJ2BqhBHJMwq3SydWYjFXr+FU6flRBSMdGtonYJgWC+L4C9dtzxEKP8xNZ3BhsGqldSw8yPYSLIyDms5CgfsswK0dGuO7UQVKuzruZGJoiOMmwqa9yaLJcnEDmqKOTtHWO7NcZ3G0y7OjYvowagTAi40VUHFPFVhUMxyea9SDl0REtcVFdis6KEgCDJYONmdrZ6W5hAjMi0KzYH+kr8tnOI+hy+ZmpBPhCpq9o8Ua6kqGSTlQNaDQcmiyP9kiJc2uy1BsuvpDIuBppVyXvqZRsmUCAqQiqLI/2U2wiSjA515Bt8K3+VkZbIw/OZf3jrMDcCUtSoOgrxFSfJtOhyXQQQMmXMZUQSYK0q3G4ZHDE1tmei7ExqZN2VBKGR6Pp0mg61GoejVGXmOphKSGGLMh6CkN2hA+LJnsLUfqKFrmOyON7nnz1T/93KzCzhgCg6Zkhkp+oI/nxGr6xRVBn+oShoOCpjLkSsiIhBOhqSML06DBtOqwiZ9fmqVQ9/FDiqKMzZBscdQy25wwynkbOV7EDGSeUiSoBtYZHq2VzQSJDv2/i6cpP5gMP8ySyum9fccwWiO3MEdtZ4Oj6BoQqoWVc8EOCqIpfoSBkCSkUKMUALethJl0qkyXUEQ9dDmmL2pxsFlkasTnJclClOT0CO5T5IFvBC6N1HLHMI++PGa0L/Tc0dya+7zLhxVVm10KV7+eI9ebJdVWQXRkvP5xdiE3PeOPD9XyAMexQmSwRGXYQOYGmC6JGiKUGSJJEGAoyYxqlkoSUkJOjNeZDe09+9Z75fH9BAmeed7bwKzUKy6MUlloz4rqedjFGPPKdkVleNkVj3mKQcoCQBKhjAWohQHZCFDsgdsBGLfhecan1uX3ff+XHC4E+LoHGe39f6BmX6L4i1mEbt1qn1GxgNxvYCR0hS8fskeOBnvlgql+sb4zEewXsOm272xBd1/ftF5OLBT8vgdXnnieceot8p8pYg46e8YgM2JiHbbRigFep4lRruNUaXlTBjyoEpoSQpqkLQrRCgJYPkPyQXGeUyYQlIHbApvo9l1BEvWJrePP+x1845rT1kQmsvWu7cA6/iXt4E2L0AG59BfmlYDfoeBEVLethpF2MlIdWCFCKPoodIgUC2ReEqkSoSgSmjBtXcRIama4oaimkYr9N9Y4SciCTau5+/uAzD136UYAvTODuPSIIBWEoCL0x/JHthKl3CLO7kLwCXmUUp0rCqQnwIzK+JeMbMqEqIZTyV3YCFFegjXqY6YDIYIiecylGu8hHziFe+BWKGPYLnXUnH3z44f2/PgJhSDC99R3CQj9SoR+K+xFuEtnPIrkF5NCHwEcKA0LNIFBMAj2Boy3BNpczZnYgUMpFaBhSl/oJejDgH2yobS78+NHhj0Lg+H+vzxZZR1S0E0TaCMPzyqREmawYb0MRzrovtzNKb0kiWbuB+pGn1ZZ05sPdEPsoBE7ICfltl/8BCn3jTzeJB8MAAAAASUVORK5CYII=">
              </span>
            <!--Image-->
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Name" name= "name" required>
          </div>

        <label for="username" class="form-label">Username</label>
          <div class="input-group mb-3">
            <!--Image-->
              <span class="input-group-text" id="username">
                <img width="30px" height="30px" src="data:image/png;base64,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">
              </span>
            <!--Image-->
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Username" name= "username" required>
          </div>

        <label for="basic-url" class="form-label">Password</label>
          <div class="input-group mb-3">
            <!--Image-->
              <span class="input-group-text" id="password">
                  <img width="30px" height="30px" alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNDgiIGhlaWdodD0iNDgiCnZpZXdCb3g9IjAgMCA1MTIgNTEyIgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxwYXRoIGZpbGw9IiNCQ0JDQkMiIGQ9Ik0zMTguOSAzOC40Yy0yMC4zLTE0LjYtNDUuMS0yMS03MC0yMC44LTIzLjMuMi00OS4yIDIuNS02OC44IDE2LjMtOS4yIDYuNS0xNy4yIDE0LjktMjIuMSAyNS4xLTUuNyAxMS44LTMuNSAyNS4xLTQuNiAzNy44IDcuMi4zIDE0LjQuNSAyMS42LjYuMSAwIC4xIDAgLjIgMC0uMS0uMS0uMi0uMy0uMy0uNC05LjUtMTUuNiA3LjEtMzQuNyAxNy41LTQ1LjMgNi44LTYuOSAxMy43LTEyLjUgMjMtMTUuOCAxMS40LTMuOSAyMy41LTUgMzUuNC00LjEgMzYuMyAyLjkgODAuNiAyMi4zIDg0IDYyLjYgNC40IDAgOC44IDAgMTMuMSAwQzM0Ni45IDcyLjYgMzM2LjkgNTEuMyAzMTguOSAzOC40ek0zMjEuMSAyNzUuN2MtLjUtNC42LTEuMS05LjItMS41LTEzLjgtLjQtMy45LS4yLTcuOC0xLjEtMTEuNy0xLjctNy4zLTUuMS0xNi4zLTE0LTE1LjgtMi45LjItNC43LTEuNS01LjQtMy42LTMgMS03LjItLjQtOC00LjUtMi41LTExLjktNC0yNS4zLTEwLjEtMzYuMS02LjItMTEtMTYuNS0xNi0yOS0xNS45LTE0LjcuMi0yNS4yIDguMi0zMC40IDIyLTIuMSA1LjYtMy40IDEyLjctMS41IDE4LjUgMS4xIDMuMSAyLjcgNS44IDUuNSA3LjYgMi4zIDEuNSAzIDMuMyAzIDYgMCAzLjItMS45IDUuNC01LjEgNS45LTcuMyAxLjMtMTUuMiA3LTE0LjQgMTUuMS4yIDItLjYgMy41LTEuOCA0LjUgMi4yIDEzLjQgNC42IDI2LjkgOCA0MC4xIDIuMiA4LjQgNC40IDE5IDE0LjEgMjEuNiA5LjEgMi40IDE4LjguNyAyNy45LS41IDExLjQtMS41IDIyLjYtLjIgMzQuMS0uMSAxMCAuMSAyMi45LS4yIDI3LjYtMTAuOEMzMjIuOSAyOTUuNSAzMjIgMjg1LjEgMzIxLjEgMjc1Ljd6TTI0MC4yIDIyNS4zYy0yLjUtLjEtNC43LTEuNy00LjctNC45LjEtMTAuOCAyLTMxLjYgMTYuOC0zMS43IDE3LjgtLjEgMjMuOSAyMi44IDI0LjEgMzYuOCAwIDIuOC0xLjkgNS45LTUuMSA1LjloLTI1LjVDMjQyLjEgMjMxLjUgMjQwLjEgMjI4LjMgMjQwLjIgMjI1LjN6TTI3Ny40IDI5M2MtOS4xLjItMTcuOSAyLjgtMjcgMy00LjUuMS02LjgtMy45LTUuMy03LjkgMS4zLTMuNSAzLjMtNi43IDUuNi05LjYuNy0uOSAxLjYtMS44IDIuNC0yLjktNi41LTQuNi05LjQtMTMuNy03LjgtMjEuNSAyLTkuNSA5LjgtMTMuMiAxOC45LTEwLjcgNS41IDEuNSA4LjUgNi44IDguNCAxMi4zLS4xIDQuNC4zIDEwLjctMS41IDE0LjctLjEuMy0uMy42LS41IDEgLjcgMSAxLjggMi4xIDIuNiAzIDMuNSAzLjUgOS4zIDcuMyA5LjMgMTIuN0MyODIuNSAyODkuOSAyODAuNiAyOTIuOSAyNzcuNCAyOTN6Ij48L3BhdGg+PHBhdGggZmlsbD0iIzEyNzI3NCIgZD0iTTI1Mi41LDE5OS43Yy01LjUtMC41LTYsMTYuNS02LjEsMTkuOWMwLDAuMywwLDAuNi0wLjEsMC45aDE4LjdDMjY0LjIsMjExLjgsMjYxLjEsMjAwLjUsMjUyLjUsMTk5Ljd6Ij48L3BhdGg+PHBhdGggZmlsbD0iIzEyNzI3NCIgZD0iTTQzMC40LDMxMi41Yy03LjEsMC03LjktMTAuOS0wLjgtMTFjMTEuNS0wLjEsMjMtMS4zLDM0LjUtMS41Yy0wLjMtMTAuMy0wLjktMjAuNi0xLjctMzAuOWwwLDBjLTUuMi00LjgtMTUuNC0zLjItMjEuOC0yLjZjLTguNCwwLjgtMTYuOCwyLjQtMjUuMiwyLjVjLTcuMSwwLjEtNy45LTEwLjktMC44LTExYzkuOC0wLjEsMTkuNC0yLjIsMjkuMi0yLjhjNS42LTAuMywxMS44LTAuNSwxNy40LDEuMWMtMS4yLTExLjQtMi42LTIyLjctNC4xLTM0Yy0xLjktMC43LTMuNS0yLjUtMy45LTQuN2MtMTYuNi0wLjMtMzMuMiwzLjItNDkuOCwzLjNjLTcuMSwwLjEtNy45LTEwLjktMC44LTExYzE3LjUtMC4xLDM0LjktMy41LDUyLjQtMy4yYy0yLTEzLjgtNC0yNy42LTUuOS00MS40Yy0wLjIsMC0wLjQsMC0wLjcsMGgtNTguNWMtNy4xLDAtNy45LTExLTAuOC0xMWg1OC41YzAsMCwwLjEsMCwwLjEsMGMtMC45LTYuOS0xLjctMTMuOC0yLjQtMjAuN2MtMy4xLDAtNi40LTIuNC01LjYtNi40YzQuNS0yNC43LTM5LjQtMjItNTQuMi0yMmMtMTcuNiwwLTM1LjEsMC01Mi43LDBjLTIuMiwxLjctNS41LDEuNy03LjMsMGMtMzAuNiwwLjEtNjEuMiwwLjQtOTEuOCwxLjFjLTIzLjIsMC41LTQ2LjYsMi41LTY5LjgsMS40Yy0xNS41LTAuNy0zMS0xLjUtNDYuNS0xLjFjLTE5LjEsMC41LTYyLjEsMS40LTY0LjMsMjYuN2MwLjksMC44LDEuNSwyLDEuNiwzLjVjMC45LDEzLjMsMS42LDI2LjcsMi4yLDQwYzAuMywwLDAuNi0wLjEsMC45LTAuMWM5LjUtMC4xLDE4LjktMi4zLDI4LjItMy43YzcuMy0xLjEsMTUuNS0yLjgsMjIuNy0wLjNjNi43LDIuMywxLjcsMTIuMi00LjksOS45Yy0xLjUtMC41LTYsMC04LjQsMC4yYy00LjIsMC41LTguMywxLjEtMTIuNSwxLjhjLTgsMS4zLTE2LjEsMy0yNC4zLDMuMWMtMC40LDAtMC45LDAtMS4zLTAuMWMwLjQsMTAuNCwwLjksMjAuOCwxLjMsMzEuMmMwLjIsMCwwLjQsMCwwLjYsMGMxMS4zLDEuMywyNC4xLTAuMiwzNS44LDAuMmM4LjYsMC4zLDI0LjMtMC40LDI4LjMsOS40YzIuNiw2LjQtNy4xLDkuOS0xMC4xLDQuMmMwLDAtMC4xLTAuMS0wLjEtMC4xYy0wLjUtMC4yLTEuNC0wLjYtMS42LTAuN2MtMi4yLTAuNi00LjQtMS02LjYtMS4yYy01LjYtMC42LTExLjItMC43LTE2LjktMC43Yy05LjYsMC0xOS40LDAuOC0yOC45LTAuMWMwLjYsMTQuMSwxLjEsMjguMiwxLjgsNDIuM2MwLjgtMC41LDEuNy0wLjgsMi45LTAuOWM4LjgtMC4xLDE3LjUtMS4zLDI2LjMtMS42YzcuNS0wLjIsMTYuNC0wLjUsMjMsMy42YzYsMy43LDEuMiwxMy42LTQuOSw5LjljLTUuNy0zLjUtMTMuNy0yLjctMjAuMS0yLjRjLTcuOCwwLjQtMTUuNywxLjQtMjMuNSwxLjRjLTEuMywwLTIuNC0wLjQtMy4zLTFjMC44LDE0LjksMS42LDI5LjgsMi43LDQ0LjhjMC43LTAuNSwxLjYtMC43LDIuOC0wLjdjMTgtMC4xLDM2LTIuOSw1NC0zYzcuMSwwLDcuOSwxMC45LDAuOCwxMWMtMTgsMC4xLTM2LDIuOS01NCwzYy0xLjEsMC0yLTAuMi0yLjgtMC43YzAuNCw0LjQsMC44LDguOCwxLjMsMTMuMmMxLjcsMTYuMSw1LjUsMzMuOSwxOS4yLDQ0LjNjMjAuNSwxNS42LDQ4LjYsMTYuMiw3My4yLDE1LjRjMzEtMS4xLDYxLjktNC42LDkyLjktNS4zYzMyLjQtMC44LDYzLjYsNC4yLDk1LjQsOS43YzIyLjEsMy44LDQ1LDYsNjYuNS0xLjljMTYuNS02LDMwLjItMTcuNiwzOC40LTMzLjJjMTAuOC0yMC42LDEyLjctNDQsMTIuNy02Ni45QzQ1Mi45LDMxMS4yLDQ0MS43LDMxMi40LDQzMC40LDMxMi41eiBNMTM4LjQsMTgzLjZjLTEtMC45LTEuOS0yLjMtMS45LTMuN3YtMS41YzAtMS41LDAuMy0yLjksMS40LTQuMWMwLjktMS4xLDIuMy0xLjcsMy43LTEuOWMxLjUtMC4xLDIuOSwwLjQsNC4xLDEuNGMxLDAuOSwxLjksMi4zLDEuOSwzLjd2MS41YzAsMS41LTAuMywyLjktMS40LDQuMWMtMC45LDEuMS0yLjMsMS43LTMuNywxLjlDMTQwLjksMTg1LjEsMTM5LjUsMTg0LjYsMTM4LjQsMTgzLjZ6IE0xNDUuNSwyMzIuNHYtMS41YzAtMS41LDAuMy0yLjksMS40LTQuMWMwLjktMS4xLDIuMy0xLjcsMy43LTEuOWMxLjUtMC4xLDMsMC40LDQuMSwxLjRjMSwwLjksMS45LDIuMywxLjksMy43djEuNWMwLDEuNS0wLjMsMi45LTEuNCw0LjFjLTAuOSwxLjEtMi4zLDEuNy0zLjcsMS45Yy0xLjUsMC4xLTMtMC40LTQuMS0xLjRDMTQ2LjMsMjM1LjIsMTQ1LjUsMjMzLjgsMTQ1LjUsMjMyLjR6IE0xNTIuMSwyODAuNWM3LjEsMCw3LjksMTEsMC44LDExQzE0NS44LDI5MS41LDE0NSwyODAuNSwxNTIuMSwyODAuNXogTTE1OS42LDMzMC4xYy0wLjksMS0yLjMsMS45LTMuNywxLjloLTEuNWMtMS41LDAtMi45LTAuMy00LjEtMS40Yy0xLjEtMC45LTEuNy0yLjMtMS45LTMuN2MtMC4xLTEuNSwwLjQtMywxLjQtNC4xYzAuOS0xLDIuMy0xLjksMy43LTEuOWgxLjVjMS41LDAsMi45LDAuMyw0LjEsMS40YzEuMSwwLjksMS43LDIuMywxLjksMy43QzE2MS4xLDMyNy41LDE2MC42LDMyOSwxNTkuNiwzMzAuMXogTTMzMS41LDMwMS4zYy0yLjQsMTAtOC4yLDE4LjctMTguMywyMi4xYy0xMS42LDMuOS0yMy45LDIuNi0zNS45LDIuMWMtMTEuMS0wLjUtMjEuNSwxLjUtMzIuNSwyLjJjLTksMC42LTE4LjUsMC4xLTI2LjItNS4yYy05LjQtNi41LTEyLjEtMTcuOC0xNC42LTI4LjNjLTMuNy0xNS40LTYuMy0zMS4xLTktNDYuN2MtMC41LTMuMiwxLjUtNS4xLDMuOS01LjZjMi4yLTcsOC0xMi40LDE0LjgtMTUuNmMtOC4xLTEwLjYtNi4zLTI2LjktMC4zLTM4LjVjNy43LTE0LjgsMjAuNS0yNC41LDM3LjctMjQuM2MxNS42LDAuMiwzMC41LDUuNSwzOC41LDE5LjhjNywxMi41LDkuMywyNi44LDEyLjEsNDAuN2MwLjYtMC4yLDEuMi0wLjQsMS45LTAuNGMxMi42LTAuNywyMS4yLDguNCwyNC40LDE5LjljMi41LDguNiwyLjYsMTcuNywzLjYsMjYuNUMzMzIuNywyODAuMiwzMzMuOSwyOTEuMSwzMzEuNSwzMDEuM3ogTTM1MCwxNjQuMWMwLDEuNS0wLjMsMi45LTEuNCw0LjFjLTAuOSwxLjEtMi4zLDEuNy0zLjcsMS45Yy0xLjUsMC4xLTMtMC40LTQuMS0xLjRjLTEtMC45LTEuOS0yLjMtMS45LTMuN3YtMS41YzAtMS41LDAuMy0yLjksMS40LTQuMWMwLjktMS4xLDIuMy0xLjcsMy43LTEuOWMxLjUtMC4xLDMsMC40LDQuMSwxLjRjMSwwLjksMS45LDIuMywxLjksMy43VjE2NC4xeiBNMzcxLDIzMC4xYzAsMS41LTAuMywyLjktMS40LDQuMWMtMC45LDEuMS0yLjMsMS43LTMuNywxLjljLTEuNSwwLjEtMi45LTAuNC00LjEtMS40Yy0xLTAuOS0xLjktMi4zLTEuOS0zLjd2LTNjMC0xLjUsMC4zLTIuOSwxLjQtNC4xYzAuOS0xLjEsMi4zLTEuNywzLjctMS45YzEuNS0wLjEsMi45LDAuNCw0LjEsMS40YzEsMC45LDEuOSwyLjMsMS45LDMuN1YyMzAuMXogTTM3Ny45LDI5M2MtMi44LDAuMi01LjktMi4xLTUuOS01LjF2LTQuNWMwLTMsMS45LTUuNyw1LjEtNS45YzIuOC0wLjIsNS45LDIuMSw1LjksNS4xdjQuNUMzODMsMjkwLjEsMzgxLjEsMjkyLjcsMzc3LjksMjkzeiBNMzkzLjMsMzQyYy0wLjIsMC45LTAuNywyLjMtMS40LDNjLTEuMSwwLjktMS4xLDEuMS0yLjQsMS42Yy0wLjUsMC4yLTEuMSwwLjMtMS42LDAuNGMtMC4zLDAtMC42LDAtMC45LDBjLTEuNSwwLTIuOS0wLjMtNC4xLTEuNGMtMS4xLTAuOS0xLjctMi4zLTEuOS0zLjdjLTAuMS0xLjUsMC40LTIuOSwxLjQtNC4xYzAuMy0wLjMsMC43LTAuNywxLjEtMC45YzAuMS0wLjIsMC4zLTAuNCwwLjQtMC42YzAuOS0xLjEsMi4zLTEuNywzLjctMS45YzEuNS0wLjEsMywwLjQsNC4xLDEuNGMxLDAuOSwxLjksMi4zLDEuOSwzLjdDMzkzLjUsMzQwLjQsMzkzLjUsMzQxLjIsMzkzLjMsMzQyeiI+PC9wYXRoPjxwYXRoIGQ9Ik00NzQuMywyODAuOWMtMy4yLTUzLjgtMTQuNi0xMDYuNy0xOS4zLTE2MC4zYy0wLjMtMy4xLTIuNi00LjgtNS4yLTQuOWMtOC40LTI1LjYtNjAuMi0yMS4xLTgxLjItMjEuMWMtMy4yLDAtNi41LDAtOS43LDBjLTAuOC0yMi45LTEwLjgtNDYuNy0yOC43LTYxLjJDMzA5LjEsMTYuMSwyODMsOC4yLDI1Ni4xLDYuOGMtMjUuMy0xLjMtNTMuNCwxLjctNzUuOCwxNC4xYy0xMC42LDUuOS0yMCwxNC40LTI2LjgsMjQuNEMxNDUuMyw1Ny4yLDE0Myw2OS42LDE0Myw4My44YzAsNC4xLDAsOC4xLTAuNCwxMi4yYzAsMC4yLDAsMC40LDAsMC41Yy0xNS44LTAuNi0zMS42LTAuOS00Ny40LDAuOGMtMjMuNywyLjYtNTYuNCwxMi01My4yLDQyLjFjMC4yLDEuNiwwLjksMi44LDEuOCwzLjZjNCw2My45LDQuNCwxMjguMSw5LjgsMTkyYzIsMjMuMiwzLjcsNDgsMjEuOSw2NC44YzE4LjcsMTcuMyw0NywxOS45LDcxLjIsMjAuMWMyOS45LDAuMiw1OS44LTMuMiw4OS42LTQuOWMxNi40LTAuOSwzMi44LTEuMyw0OS4yLDAuMWMxNS45LDEuMywzMS43LDQsNDcuNSw2LjhjMjQuNSw0LjMsNDguMiw4LjIsNzIuOSwyLjhjMTcuNy0zLjksMzMuOS0xMy4zLDQ1LjYtMjcuMkM0NzguMiwzNjUuOSw0NzYuNiwzMTkuNSw0NzQuMywyODAuOXogTTE1OC4xLDU5LjFDMTYzLDQ4LjksMTcxLDQwLjQsMTgwLjIsMzRjMTkuNi0xMy44LDQ1LjQtMTYuMSw2OC44LTE2LjNjMjQuOS0wLjIsNDkuNiw2LjEsNzAsMjAuOGMxOCwxMi45LDI4LDM0LjIsMjksNTYuMWMtNC40LDAtOC44LDAtMTMuMSwwYy0zLjMtNDAuMy00Ny43LTU5LjYtODQtNjIuNmMtMTItMS0yNCwwLjEtMzUuNCw0LjFjLTkuMywzLjItMTYuMyw4LjktMjMsMTUuOGMtMTAuNCwxMC42LTI3LDI5LjYtMTcuNSw0NS4zYzAuMSwwLjIsMC4yLDAuMywwLjMsMC40Yy0wLjEsMC0wLjEsMC0wLjIsMGMtNy4yLTAuMS0xNC40LTAuMy0yMS42LTAuNkMxNTQuNSw4NC4yLDE1Mi40LDcwLjksMTU4LjEsNTkuMXogTTE4NCw5MC45Yy0zLjEtNS4xLDEuNC0xMi4yLDQuMS0xNi41YzQtNi41LDkuNC0xMi4zLDE0LjgtMTcuNmMxMy43LTEzLjUsMzMuNy0xNS43LDUyLTEzLjRjMjkuNywzLjgsNjQuOSwxOC44LDY4LjgsNTEuMmMtMTcuOSwwLjEtMzUuOCwwLjItNTMuNywwLjRjLTE2LjMsMC4yLTMyLjYsMC41LTQ4LjksMC45Yy0xMi41LDAuMy0yNSwxLjItMzcuNSwxLjVDMTg0LjksOTUuOCwxODUuNSw5My4zLDE4NCw5MC45eiBNNDUxLjUsMzc3LjljLTguMiwxNS42LTIxLjksMjcuMi0zOC40LDMzLjJjLTIxLjUsNy45LTQ0LjQsNS43LTY2LjUsMS45Yy0zMS44LTUuNS02My4xLTEwLjUtOTUuNC05LjdjLTMxLDAuNy02MS45LDQuMi05Mi45LDUuM2MtMjQuNywwLjktNTIuNywwLjMtNzMuMi0xNS40Yy0xMy42LTEwLjQtMTcuNC0yOC4yLTE5LjItNDQuM2MtMC41LTQuNC0wLjktOC44LTEuMy0xMy4yYzAuOCwwLjQsMS43LDAuNywyLjgsMC43YzE4LTAuMSwzNi0yLjksNTQtM2M3LjEsMCw2LjItMTEtMC44LTExYy0xOCwwLjEtMzYsMi45LTU0LDNjLTEuMSwwLTIsMC4zLTIuOCwwLjdjLTEuMS0xNC45LTEuOS0yOS45LTIuNy00NC44YzAuOSwwLjYsMiwxLDMuMywxYzcuOS0wLjEsMTUuNy0xLDIzLjUtMS40YzYuNC0wLjMsMTQuNC0xLjEsMjAuMSwyLjRjNi4xLDMuNywxMC45LTYuMiw0LjktOS45Yy02LjctNC4xLTE1LjUtMy44LTIzLTMuNmMtOC44LDAuMi0xNy41LDEuNS0yNi4zLDEuNmMtMS4yLDAtMi4yLDAuMy0yLjksMC45Yy0wLjctMTQuMS0xLjMtMjguMi0xLjgtNDIuM2M5LjYsMC44LDE5LjQsMC4xLDI4LjksMC4xYzUuNiwwLDExLjMsMC4xLDE2LjksMC43YzIuMiwwLjMsNC41LDAuNiw2LjYsMS4yYzAuMiwwLjEsMS4yLDAuNSwxLjYsMC43YzAuMSwwLDAuMSwwLjEsMC4xLDAuMWMzLDUuNywxMi43LDIuMiwxMC4xLTQuMmMtNC05LjgtMTkuNy05LjEtMjguMy05LjRjLTExLjgtMC40LTI0LjUsMS4xLTM1LjgtMC4yYy0wLjIsMC0wLjQsMC0wLjYsMGMtMC40LTEwLjQtMC44LTIwLjgtMS4zLTMxLjJjMC40LDAuMSwwLjgsMC4xLDEuMywwLjFjOC4yLTAuMSwxNi4zLTEuNywyNC4zLTMuMWM0LjEtMC43LDguMy0xLjMsMTIuNS0xLjhjMi40LTAuMyw2LjktMC43LDguNC0wLjJjNi42LDIuMywxMS42LTcuNSw0LjktOS45Yy03LjItMi41LTE1LjMtMC45LTIyLjcsMC4zYy05LjMsMS40LTE4LjcsMy42LTI4LjIsMy43Yy0wLjMsMC0wLjYsMC0wLjksMC4xYy0wLjYtMTMuMy0xLjMtMjYuNy0yLjItNDBjLTAuMS0xLjUtMC43LTIuNy0xLjYtMy41YzIuMi0yNS4yLDQ1LjItMjYuMiw2NC4zLTI2LjdjMTUuNS0wLjQsMzEsMC40LDQ2LjUsMS4xYzIzLjIsMS4xLDQ2LjYtMC45LDY5LjgtMS40YzMwLjYtMC43LDYxLjItMSw5MS44LTEuMWMxLjgsMS43LDUuMSwxLjYsNy4zLDBjMTcuNiwwLDM1LjEsMCw1Mi43LDBjMTQuOCwwLDU4LjctMi43LDU0LjIsMjJjLTAuNyw0LDIuNSw2LjQsNS42LDYuNGMwLjcsNi45LDEuNiwxMy44LDIuNCwyMC43YzAsMC0wLjEsMC0wLjEsMEgzODljLTcuMSwwLTYuMiwxMSwwLjgsMTFoNTguNWMwLjIsMCwwLjUsMCwwLjcsMGMxLjksMTMuOCwzLjksMjcuNiw1LjksNDEuNGMtMTcuNS0wLjMtMzQuOCwzLTUyLjQsMy4yYy03LjEsMC4xLTYuMiwxMSwwLjgsMTFjMTYuNi0wLjEsMzMuMi0zLjYsNDkuOC0zLjNjMC40LDIuMSwyLDMuOSwzLjksNC43YzEuNSwxMS4zLDIuOSwyMi43LDQuMSwzNGMtNS42LTEuNi0xMS45LTEuNC0xNy40LTEuMWMtOS43LDAuNS0xOS40LDIuNi0yOS4yLDIuOGMtNy4xLDAuMS02LjIsMTEuMSwwLjgsMTFjOC40LTAuMSwxNi44LTEuNywyNS4yLTIuNWM2LjMtMC42LDE2LjYtMi4yLDIxLjgsMi42bDAsMGMwLjksMTAuMywxLjUsMjAuNiwxLjcsMzAuOWMtMTEuNSwwLjItMjMsMS40LTM0LjUsMS41Yy03LjEsMC02LjIsMTEsMC44LDExYzExLjMtMC4xLDIyLjUtMS4yLDMzLjgtMS41QzQ2NC4yLDMzMy45LDQ2Mi4zLDM1Ny4zLDQ1MS41LDM3Ny45eiI+PC9wYXRoPjxwYXRoIGQ9Ik0zMzEuNSwyNzBjLTEtOC45LTEuMS0xNy45LTMuNi0yNi41Yy0zLjMtMTEuNS0xMS44LTIwLjctMjQuNC0xOS45Yy0wLjcsMC0xLjQsMC4yLTEuOSwwLjRjLTIuOC0xMy45LTUuMS0yOC4yLTEyLjEtNDAuN2MtOC0xNC4yLTIyLjktMTkuNi0zOC41LTE5LjhjLTE3LjItMC4yLTMwLDkuNS0zNy43LDI0LjNjLTYsMTEuNi03LjgsMjcuOSwwLjMsMzguNWMtNi44LDMuMi0xMi42LDguNi0xNC44LDE1LjZjLTIuNCwwLjUtNC40LDIuNC0zLjksNS42YzIuNiwxNS42LDUuMywzMS4zLDksNDYuN2MyLjUsMTAuNSw1LjEsMjEuOCwxNC42LDI4LjNjNy43LDUuMywxNy4xLDUuOCwyNi4yLDUuMmMxMS0wLjcsMjEuNC0yLjcsMzIuNS0yLjJjMTIsMC41LDI0LjMsMS44LDM1LjktMi4xYzEwLjEtMy40LDE1LjktMTIuMSwxOC4zLTIyLjFDMzMzLjksMjkxLjEsMzMyLjcsMjgwLjIsMzMxLjUsMjcweiBNMzE5LDMwNC4zYy00LjcsMTAuNi0xNy42LDEwLjktMjcuNiwxMC44Yy0xMS41LTAuMS0yMi43LTEuNS0zNC4xLDAuMWMtOS4yLDEuMi0xOC44LDMtMjcuOSwwLjVjLTkuNy0yLjYtMTItMTMuMi0xNC4xLTIxLjZjLTMuNC0xMy4yLTUuOC0yNi42LTgtNDAuMWMxLjItMSwxLjktMi41LDEuOC00LjVjLTAuOC04LjEsNy4xLTEzLjgsMTQuNC0xNS4xYzMuMS0wLjUsNS4xLTIuNyw1LjEtNS45YzAtMi42LTAuNy00LjQtMy02Yy0yLjgtMS45LTQuNC00LjUtNS41LTcuNmMtMi01LjgtMC43LTEyLjksMS41LTE4LjVjNS4yLTEzLjgsMTUuNy0yMS44LDMwLjQtMjJjMTIuNi0wLjIsMjIuOSw0LjksMjksMTUuOWM2LDEwLjgsNy42LDI0LjIsMTAuMSwzNi4xYzAuOCw0LDUsNS40LDgsNC41YzAuNywyLjEsMi42LDMuOCw1LjQsMy42YzktMC41LDEyLjMsOC40LDE0LDE1LjhjMC45LDMuOCwwLjgsNy44LDEuMSwxMS43YzAuNCw0LjYsMS4xLDkuMiwxLjUsMTMuOEMzMjIsMjg1LjEsMzIyLjksMjk1LjUsMzE5LDMwNC4zeiI+PC9wYXRoPjxwYXRoIGQ9Ik0yNTIuMyAxODguN2MtMTQuOC4xLTE2LjggMjAuOC0xNi44IDMxLjcgMCAzLjIgMi4yIDQuOCA0LjcgNC45LS4xIDMgMS45IDYuMiA1LjcgNi4yaDI1LjVjMy4xIDAgNS4xLTMuMSA1LjEtNS45QzI3Ni4zIDIxMS41IDI3MC4xIDE4OC42IDI1Mi4zIDE4OC43ek0yNDYuNCAyMjAuNWMwLS4zLjEtLjYuMS0uOSAwLTMuMy42LTIwLjQgNi4xLTE5LjkgOC42LjggMTEuNiAxMi4xIDEyLjYgMjAuOEgyNDYuNHpNMjczLjEgMjc0LjRjLS45LS45LTItMi0yLjYtMyAuMi0uMy40LS42LjUtMSAxLjgtNC4xIDEuNC0xMC4zIDEuNS0xNC43LjEtNS41LTIuOS0xMC44LTguNC0xMi4zLTktMi41LTE2LjkgMS4yLTE4LjkgMTAuNy0xLjYgNy44IDEuMyAxNi45IDcuOCAyMS41LS44IDEtMS43IDItMi40IDIuOS0yLjMgMi45LTQuMyA2LjEtNS42IDkuNi0xLjUgNCAuOSA4IDUuMyA3LjkgOS4xLS4yIDE3LjktMi44IDI3LTMgMy4yLS4xIDUuMS0zIDUuMS01LjlDMjgyLjUgMjgxLjcgMjc2LjcgMjc3LjkgMjczLjEgMjc0LjR6TTE0NS42IDE3My45Yy0xLjEtMS0yLjYtMS41LTQuMS0xLjQtMS40LjEtMi44LjgtMy43IDEuOS0xIDEuMi0xLjQgMi41LTEuNCA0LjF2MS41YzAgMS40LjkgMi44IDEuOSAzLjcgMS4xIDEgMi42IDEuNSA0LjEgMS40IDEuNC0uMSAyLjgtLjggMy43LTEuOSAxLTEuMiAxLjQtMi41IDEuNC00LjF2LTEuNUMxNDcuNSAxNzYuMiAxNDYuNiAxNzQuNyAxNDUuNiAxNzMuOXpNMTU0LjYgMjI2LjRjLTEuMS0xLTIuNi0xLjUtNC4xLTEuNC0xLjQuMS0yLjguOC0zLjcgMS45LTEgMS4yLTEuNCAyLjUtMS40IDQuMXYxLjVjMCAxLjQuOSAyLjggMS45IDMuNyAxLjEgMSAyLjYgMS41IDQuMSAxLjQgMS40LS4xIDIuOC0uOCAzLjctMS45IDEtMS4yIDEuNC0yLjUgMS40LTQuMXYtMS41QzE1Ni41IDIyOC43IDE1NS42IDIyNy4yIDE1NC42IDIyNi40ek0xNTIuMSAyODAuNWMtNy4xIDAtNi4yIDExIC44IDExQzE2MCAyOTEuNSAxNTkuMSAyODAuNSAxNTIuMSAyODAuNXpNMTU5LjEgMzIyLjRjLTEuMi0xLTIuNS0xLjQtNC4xLTEuNGgtMS41Yy0xLjQgMC0yLjguOS0zLjcgMS45LTEgMS4xLTEuNSAyLjYtMS40IDQuMS4xIDEuNC44IDIuOCAxLjkgMy43IDEuMiAxIDIuNSAxLjQgNC4xIDEuNGgxLjVjMS40IDAgMi44LS45IDMuNy0xLjkgMS0xLjEgMS41LTIuNiAxLjQtNC4xQzE2MC45IDMyNC42IDE2MC4yIDMyMy4zIDE1OS4xIDMyMi40ek0zNDguMSAxNTguOWMtMS4xLTEtMi42LTEuNS00LjEtMS40LTEuNC4xLTIuOC44LTMuNyAxLjktMSAxLjItMS40IDIuNS0xLjQgNC4xdjEuNWMwIDEuNC45IDIuOCAxLjkgMy43IDEuMSAxIDIuNiAxLjUgNC4xIDEuNCAxLjQtLjEgMi44LS44IDMuNy0xLjkgMS0xLjIgMS40LTIuNSAxLjQtNC4xdi0xLjVDMzUwIDE2MS4yIDM0OS4xIDE1OS43IDM0OC4xIDE1OC45ek0zNjkuMSAyMjMuNGMtMS4xLTEtMi42LTEuNS00LjEtMS40LTEuNC4xLTIuOC44LTMuNyAxLjktMSAxLjItMS40IDIuNS0xLjQgNC4xdjNjMCAxLjQuOSAyLjggMS45IDMuNyAxLjEgMSAyLjYgMS41IDQuMSAxLjQgMS40LS4xIDIuOC0uOCAzLjctMS45IDEtMS4yIDEuNC0yLjUgMS40LTQuMXYtM0MzNzEgMjI1LjcgMzcwLjEgMjI0LjIgMzY5LjEgMjIzLjR6TTM3NyAyNzcuNWMtMy4yLjItNS4xIDIuOS01LjEgNS45djQuNWMwIDMgMy4xIDUuMyA1LjkgNS4xIDMuMi0uMiA1LjEtMi45IDUuMS01Ljl2LTQuNUMzODMgMjc5LjYgMzc5LjkgMjc3LjMgMzc3IDI3Ny41ek0zOTMuNSAzMzkuNmMwLTEuNC0uOS0yLjgtMS45LTMuNy0xLjEtMS0yLjYtMS41LTQuMS0xLjQtMS40LjEtMi44LjgtMy43IDEuOS0uMi4yLS4zLjQtLjQuNi0uNC4zLS44LjYtMS4xLjktMSAxLjEtMS41IDIuNi0xLjQgNC4xLjEgMS40LjggMi44IDEuOSAzLjcgMS4yIDEgMi41IDEuNCA0LjEgMS40LjMgMCAuNiAwIC45IDAgLjUtLjEgMS4xLS4xIDEuNi0uNCAxLjMtLjUgMS40LS43IDIuNC0xLjYuNy0uNiAxLjMtMiAxLjQtM0MzOTMuNSAzNDEuMiAzOTMuNSAzNDAuNCAzOTMuNSAzMzkuNnoiPjwvcGF0aD48L3N2Zz4="/>
              
              </span>
            <!--Image-->
              <input type="password" class="form-control" id="password" aria-describedby="basic-addon3" placeholder="Password" name="password" required>
          </div>

          <div class="row mb-3">
              <button type="submit" class="btn btn-success" name="btnlogin"> Submit</button>
          </div>
          <div class="text-center">
                Belum Punya Akun Silahkan <a href="register.php"> Daftar</a> 
          </div>
        </div>
      </form>
    </div>
       <!-- End Column-->  
        </div>
    </div>
 <!-- End Container-->   
</div>
<!-- End Image-->
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>