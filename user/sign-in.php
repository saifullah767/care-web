<?php
  include ('connection.php');
?>
<?php
if (isset($_POST["btn"])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $enpa = md5($pass);

    $a = mysqli_query($conn, "select * from user_tbl where email='$email' && password='$enpa'");
    $b = mysqli_num_rows($a);
    $row = mysqli_fetch_array($a);
    if ($b) {
        $_SESSION["email"] = $row['email'];
        header("Location: index.php");
    } else {
       echo "<script>alert('No Userfound')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
<!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->

</head>
<body >
    <div class="main-1" >
        <!-- Sign in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content" >
                    <div class="signin-image">
                        <figure><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUTEhIQFhUVFRUYGBYVFxcWFRUXFRYXFhgVFxcYHSggGBolGxUWITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGy0lHyUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBEwMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABQECAwQGBwj/xABLEAACAQICBQYHCg0DBQAAAAABAgADEQQhBRIxQVEGE2FxgZEHIjJScqGxFDNCVJKTwdHS0xYjQ1NiY3OCsuHi8PEVosIkNESD4//EABsBAQACAwEBAAAAAAAAAAAAAAADBAECBQYH/8QAOhEAAgECAwMKBQIEBwAAAAAAAAECAxEEITESQVEFEyIyYXGBkbHwFFKhwdFC4QYjU6IVM4KSssLx/9oADAMBAAIRAxEAPwD2yIibGgiIgCIiAIiIAiVlIAiViAUiVlIAiJWAUiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgFYlswvU4TKVzWUkjIzgTGaxlkTdRRE5tgueMpeUJnMae5UGiQEW979GQ35g+yYnKMFtS0FOE6s1Tgryei7tdbL6nUgyoqHjObwOmnZVe9wwvYgA9IuJPYauHUMP8HhMqzVyGNW8nDNNap9hsrW4iZFYGa8RsomVRm3KTClXjMs0asTJplYiJgyIiIAiViAUiVlsArErKQBErKQBERAEREAREQBERAEREASkrLXNhMmDFVfdLIiSpWK7d3cREQYNPSjEUmt0DsJEgByZXF+M1Rk1Bq2ABvvvnOoq0wylTsItNDR1T3OzLUuFNrNa63HV/eUjqwUo2ZrSqzoYmNaLtk1fgcDpHFVaFQ0E11FMlRrKNZ873IzyN8rbp23Jx2IOsLEohI4MQbj++ExaWZMRVVkpgsgIVreMb/R1yV0fhebXPacz9Uio05Qbu/DgT4rFUcROHM00tm7lL5m+3fnn35aI2oiJZIhLqdS3VLYhq5lNrQ2QZWaqsRMgrdEj2WTKaM0TFz3RLDVMbLDmjOTaYmrcJiJlZsomjqPcVLnjKax4mJ5zprS2IxGJalSdkUOUVVYp5JK6zEdRPQJFWqqkk2r3LODwc8VJpOySu29yPRw54mXLW4zy2tpPFNh1Jr1PLtqgkOQb2JYZkayOLHhJrkfpavzzYasWawa2sbsjIc1vvG3ukMMXCclGzVy3V5Jq0qcqimns3us9Fq/A71WvL5qA2mdHvLLVjnRncviImpuIiIAiIgCIiAIiIAmKvsmWYq+ztmVqaz6rNTEVCouBfMC3WbTDia9VEZuYLaoJ1VILG24AbTMuL8kekvtEx6Sx9RKhVWAAUHMZ53zHHqmZXvZDnKdKkpzjfPt7O1HF4/HaTeozJTxSKTkgpsdUWA83t7Z0mgsbiaiatTD1QyKt2cauucwSLgZ5Z9clUxVQqpyzUHyAcyP2g9kv901ej5A+9leFOUZX2my/UxVKrTS5qK4a/nPxMVOo+tqumrlfbebEsxfvo9A+2Xy1B3Rz66SktlWy/JQCa+Ox1KimvWqIi8WIAvwF9p6JynhF5UvhEWlRIFWoCdawPNoMrgH4ROQ6jPKMfpKtXINatVqWvbXdmtfbYE5bBs4S7Qwcqq2m7IoVcQoZas920byiwmIbVo4ik7ebezHqVrE9klZ81A2NxtGYO8HjOt0T4Q8bRUKxSsBsNUEuP3wQT23MlqcnyXUd+80hik8pHtETh+RPLlsZVNCtTRHKlkZL6rau1SCSQbZ7dxnau1gTwF5SqQlTlsyWZahJTV4lKlULtIEsTFIcgw7bj2yJq1Cxuf76JlXCMysQQCu0nyR+j0n2eyvt8DqvA04R/mSd3wJe8rNLRla4Knd7JnxWISmjVKjBURSzMcgqqLknskid1c59Wk6c3BmaJ49yi8K9VyVwSCmn52oNao3SEPip237JxeN5S42sb1MXiT0CoyL8lCFHdInWS0Jo4SbWeR9LAzj+VOhaoLV8OFzzdFRA/EsrBdY33i99u3ZPLeSfLfE4SsperWq0CQKlN2L+KdrJrHxWG0WIBtY8R7joTTNDF0hWw7h0JI2EFWG1WU5qcx3iayUaqsySnKrg6m3HNfR9j95HnuFxS1K7aqtqsPxagXOtTIqIthvZlI/8AYZ2fJrQz0RzlUoarKBkqXUZZFwLs2Qub7t+2SVDRdFKjVVpqHfa3tsNgvvttm7NKGG2XeTuyfG8oqqtiktlWV765e8+NhCtYxEtnLNoRMdE5TLIiwncpERMGRERAEREAREQBMVc5TNNaq1zNlqaTeRrYvyR6S+0TW0tWtUI1aZsoOagm2e/f1TZxfkj0l9omtpetaoRq0zYA5i5tn059Uy+sRV3bDLO2f4M9LWZUISnmo/Ja27ZfXHsl3Nt+bp/Mf/SWUhrKh5unmi/ktbdsvrS7m/1dL5g/akbLFN9FdyM2K99X0D7ZdLcV76voH2y6SU9DXEdZdy9WeN+Fcn3fn+Zp26rv9N5x077w04Iq+HxC7GVqTHpU66epn7p57oyqGrUhUF0NSmGUDapYXFt+W6d/DVFzKfBehyKlFyqa6mJCXqBV2syqOkk2HrMltJ6ExeHYrUoOw3PTBZD0ggZdRsZ6FQ5NYdsZ7qWmFphENNBYfjQXDOyqLXACW6TfaJMYrDFqtIjXsGzIqsgW2YJQZPc5WO6UJ8p9JbCytnfj+x1ockpwe3rutwOQ8GGgMScUuIqUqlKnTV7FwVLsylAFBAJFmJvsytPWaqXUjiDLxKq1tkrVqsqstplalFU+r3kZRw4yJcAfCbehG1Lbm4H6bTHjMVrWVRZF2D6TN44JBral11r61s73N87zCmjhvYn1Srss7FPFUtpzqPPdkW6LTa3ZNPlxg3rYDE06YJY0mIA2tq2fVHXq27ZNqoAsNkukijlYoVqznVdT3kfPWjeQ2Lr4dMRT5oh7lULarFdzZi2fXstL8P4P9IMbGkidL1Et/tJPqnq9XEOuL5heYWnqM4QJU19UMF1gwtTUaxA1du+UGMqe6jRvQ1ebDhfxnO6t9UsTbUI1srXvvlRo7CSaTPENOaKfC12oVMytjcAgMCLhlvu2jsM77wHYg87iad/FKU3t0qzLftDDuk9yv5MjGthr5BKh5wjJuaZSSAfSVR0axMeDzQlKhjMcaBJpLzNIXN7Pq85UTW321k75tDrIgxStTZ38TFiq+opbh6zumlhMA9a5ql12au4G99gPZLTdjiOT2tmKu/e8kokXUV8O58o0ssz08JKQncRldtNWaMtDZM0xUNnbMkjepbh1UIiJg2EREAREQBKyktqPaZMN2RZVfdMURJErEEpXZgxfkj019omvpataofEpmygnWFzbPPbsmxiwdXIE5g2HQZjrVVc3bDsTxP8AiaS1JXRlVoKMGr3erS4FUAZUPN0zdF/JM27ZcbpdzQ/NUvmGlpqrl/017C2YByG7MRzqfFR8kfZmhZjRkkk7ea/JsYr31fQPtl01ucL1ASjKApGfXNlRfISSGSIMSukl2L7kVyl0RSxeHejWvqkXBGTKy5qynj9ZG+cToHkRQw1QVWZqrL5OsAFU+dYbT0memV8LdSDsO20gsVhSpsdh2Hj/ADmJ1pqLjF5Ms4KjSbvNdLd2Efo3yLcHqjuqNb1Wklh8MGt4wuTYrvttvNd6FOg1QVHYBrOhyu51QrU1G99ZQbDM84Nucl8Bh9VQWFnKjW3gG2YHReaKm756G8sbBU7QeZsotgBwFpdESc5YiIgwIiIBF4qixchSoJzBbZ7R0zFUTVNrg23jZJOvQDbe+RmKplWsLHLb/KVpwazOxha6mlHel6bzDicGayPSDMhqI6665MmspXWHSL3m1ya0JTwWHShTJOrcs58p3Y3Zz0k9wAG6V0atmzNzY/RJSb0o5XK2Om9vY3GlpWmWpm26x7tvtm5orGrUWwBGqFBv0jd3Ss0aujEJuCy9Wzukko3Ob04T2457mv3Gm8UGvRAbWuvC3GbiLYAcAB3TXw2CVDcXJ4nM9k2pmKsI7Tk5y19F7Zmo7JlmCi26Z5G9S3B3RSIiYNhERAERKwC0zWY3MzVjlMM3it5FUe4RNHS/vf7w+mcXpTT9Oh74VvnZRmx7Ppk8KbnoVKlZQdmj0KJ4/W5fZ+Jh7jizW9QB9sUeXTn/AMYEdDH7Mn+Cq8CP4qPA9gieZYXldSbJlNM/pghflDLvtJcY6+YCkSOVCUcpZD4qPA7abGGXK/GcEMWSQAq5m3fO+C6qgDYLDs2SvVVsi1hZqo21uM008RQHC4uD1ETclCJAXSD0nkaLebWX/cr0/wDnN6RPLHD2oGoBnTZH/dV1Yj1Tn/dh80S1CO0rnPr1FSlZ+B20TiPdp81Y92nzVm/NMg+KjwO3icR7tPmrM9SvZQ1hn9UxzZn4qPA7CaWkdIpRF2N2PkoCNZj0An1zz/SmmWPiodUDaw2noB3CV5LLetclgM9cgJ5P6TMb6pyvYStKotrZR16OCk6fO1Mlrbf48PU6bROnKtTF81WVaStTYouR1my1Tr7Gy1tlsxJB6LA2KtfqnI8qSOZoedrVCvELcfTI2lylxiiwxFW3S2se9gTKM63NzcZXfadyhg+dpxqUko3VrZ2ybzTzefbn2nfVa64dDWqeKqglQci7WyVRvznB4HlJiaTFhULAkko92TM3IF817LSPxeLqVW1qju54sSbdV9kwStUryk045WL9DAxjFqpaV+zLw379cj1fQWmqeKQsmTKQHQ7UJFx1gjMH6biSk8X0Npk4LFpUz5t11aij4S8bcQdUjtG+dZX8I6/k8OSOL1AvqVT7Z2MFt4iPRWa1PK8r4aGBqpX6Mlda9zXh6WO8ief0/CM1/Gwy26Kpv60k9ojlhhq5C3am5yC1LAE8AwNr9GRlueGqwV3H0focqOIpydkzohNhTcTXmSgd0rSLVN2djNERIyYREQBERAMNc7Jjl9fbLJLHQrz1IjlRihSwz1CL6gLW42BsO0zwXFYhqjs7m7Mbk9fsHRPbvCEL4Ct1D1G5nhs6/J8VsN9pzcW+mbGCohib7BJOaOjTmw6B/frm9L7Kb1EkdEaQNJgpPiE5jzb/AAhI6JrKKkrMwei6KTWrUx+kvqN/onodp5ryBr87UpZ3KawP7qm3qInpc87ik4z2XuO3yd/lt9v2MKNY6p7JmmOolx0yylV3GVi+WaQwa1qT0m2OpU9GsLXnBHR1ZG5tkZnUC+qCQcvKHQZ6PKE2kkKjgV6+GVa13axwlHQOIb8nb0iB6tvqkhQ5KP8ADqKPRBPttOoNUTDVxQAubAcSbCbOvN6EccDSWuZF0OTFEeUXbrNh6pocr9EL7n/FAqyEZAmxUkKQb9d+ybeP5S0qYJ1ma3mjLqvv7LyK0hpapUpC6qmva6+URvtfu2QoVJ63M89QodKCV12XOPxGA1EZmbYMgOJyGfWZHYXEMhJViD/fGS2n6lkC+c3qA+u0g6Wyc7HWhU2YZW9T1PIcqlfDOpWz2m9y0WXrc2sVinqHWdixsBnuA2AAZATDETnt31O4kkrISgbMjhb1/wCDKzT17V7cUHqJ/nBskYtMJkh4NbvH8pDnb1Wk/pJL026LHuMgX/vuE7nINS1eUOMfR3POfxRS28FGp8svo0/wjbwWJN9U532Gb0iMIPHXrkvPWPU+es9S5AaVavhyrklqTBbnaVIut+J2jsE6mmcxOB8Fq5Yg7vxQ/jneCcDExUaskjr4eTdOLZuSkrKSmXxERAEREAwV5ZMtcZTFJI6EE1mRHKjD85hqlPz1K9pUgeueBUkLEKoJJIAA2knICfSlXBCotiSM75dE5Kn4NMMlbnxXrCzl9XxNUXJNvJ2Zy7hcXClGSl4FarhZ1JJrQ8uwuh6qvm1EbiOdp3HRbW23m5XwboNY6pF7XVgwB4Gxynb0/BXhG8nFVz1GmfYslE8HVAIyc9W8YqSfEv4t/wBHplj4+mv1f2/uQvBSlpH+5P7Hlk6HkXgErV/xgDBQDY7N5/4+ubWK5L01d1FRzqsy/BzsSOHRNnkfhhTxdRASQAuZ25qx+mbVsVCpSkoN3t90Zo4OpTqwc0rX+zZ3eEpopuqKpVguQGwi+4ZSakNQ+F+0X+ESZnEkddaCYa1K+Y2zLeVmpk1UqETS0jWqhSaSK7cGbV7BlJCtT3iYJsg1dHLHS1epcKVQjJltZ1PBg1yDI/Fq3lVHHWzEkngN5PQJ2OKwFKqQalOmxGwlQWHQDtEjavJihfWp3RuI8b25+uWIVYrdY59bCVJZ7W142/Y5mngXchmAAHkqdt/Obp4Ddvz2b1WgSqjK4+qYNI0+ZqFGqqSADttkegmR+lNNIqKtNtZ99tgy3nf1TedWEI7UnkQUMJWr1Obpwd/ou96LzIjlE/4zUuPEAGXE3J9VpHUGuD0G3smtjsZq3LG7HPpJ4mX6KvzYJ2kse8medr1Ocm5cT6TgsMsPQhSX6Vbv4vzNuIiQlkSLxlS1dTwC37SR7DNvGYxafS24fXwkG7s7E5knhBLCO86Gst1I4gj1Tm33TpqZuBfgJzVUZ9pnT5GdsZHx9GcP+IFfk2p/p/5Iz6NS7E8B7f7MkZrYCnZb8c/qmzPabz5kz03wa4fVwzP+cqm3UoC+0NOsE0NA4LmcPSpb1QX9I+M3rJkigzE89WntzcuJ2aMNmCibUpKykrF0REQBKykQC1hcTWm5MFZN82iyOosrmbD+T3yLxlM1q3N61lQKSNobMbewyUw/k980dIYJmYVKZswtcXsGAN7XE13s1qxbprK+l1xRi0hgAg5ylZCgJyG3oklhqmsit5yg94kZWoV6xAcCmovezXLA7rCSyqAABsH0TDFFdOTirLyu+7ccDpH36p+0f+IzR5N/99V6k/gab2kffqn7R/4jIbRukqVDGVWqtqghM7M3wD5oPES3Ri5KSS3fdG+IlGLg5Oyv/wBWeg0D5X7Rf4RJmcTS5Y4Ia341s3B97qbNUDzZv/h5o/8APN81V+zInh6vyPyZj4mil115o6Oolx0iWU624zm6PL7ANUWmKxLsyqBzdUXZiABcrbaRJ+obmRypyhlJNd5LGcZdV3Niq2XXOMxWlKtOtUCtcBj4rZjb3jsnUzitMe/1PSklGKbaZUx0nGCcXbP7MlsPykHw6fap+g/XN5NN4ci5qBbbda627dk48CUr4dXGqwuMvVFZ04d/AkwEMVXab6l827eNtL+hCcpNKCviHqIfFJAGVvFUWHsv2zmcXpADJbMeO4fXJnSegatSqVpkLSsDdsrE7V4tbuz2yZwHJmhQVXsXqHe/kjL4K7B15npnNjha1WV3l73LU9PU5XwODpKMZbbS0Vvq9F7yOY0JyfesecrayrtzyZurgOnu4ydXRbsSQAi3yB3AZAADoktXrhFLHdw6cspq1NLIFuPGPAfWd3Tvm2IpUqVoPvb4kXJ2MxOMcsRufRUUso733t5Xfh3a50Idzju/nI2rT1WK8CR3GbuI0tUbybL1ZnvM5nS5OuWNRtZs7Duvt6JRm4fpO9QjVb/mMkXw6k3KgniRLxYcAO6c2ajec3eZYZGWeb7SdxOPRQbEE7gM+8yFCaxA4/5lGPXu9gm1o2ntbsH0z03I/J0oOOJk8msl38fbPFfxFyxCUZ4OEXdS6TenRd7LfqboFspM8k8Bz+KpJa6htdvRTPPrNh2yHnongz0dq03rkZudRfRXae1sv3J2sTU2KTfh5nj6ENuokdtL6Izlky0RlODLQ7cM5GWJWUkROIiIAiIgGpparVWhVaioeqtNzTU7GcKSq9ptPAanLDTVzfEYsG+Y5lRbotzeXVPoqUvMNXJIT2d1z50HLDTPxnF/NL93K/hlpn4zi/mk+7n0VeLzXY7Tfn18q9+B86/hlpn4zi/mk+7j8MtM/GcX80n3c+irxeNjtHPr5ffkfNL6e0kSSamJJJJJ5sZk5k+RNWtisY5LNz5J2nmz1ebPqC8XmYqUc1JmJVIyVnBM+XOexXCt8k/ZjncVwrfIP2Z9R3i8326vzvzf5NL0v6cfJfg+WkfFK4qKtYOrBg2obhlIIPk7iBJn8L9MfGMV80v3c+jLxeayUpdaTZvGpGOkEvfcfOf4X6Y+MYr5pfu5rVdO6SYlmqYkk7Tze3/ZPpW8Xmqi1oxKpGWsV78D5o/1rSPn4j5v+iP9a0j5+I+b/on0veLxsPiZ55ZdFZZe8tD5n/1nSPn4j5B+xL207pIgA1MTYfq/6J9K3i82tL5mR3p/015L8HzJV0nj2FmbEEfs/wCmYvdWM/X/ADZ+zPqC8XkbpKTvLMnhipU1swyXBOy+h8ve6sZ+v+bP2ZiqnEsbsKxPoH6p9TXi8xzEeC8iT4+rxfmz5W5vEeZW+Q31RzeI8yt8hvqn1TeLxzEfaH+IVuL/ANzPlbmq/mVvkN9UyI2JAsFrAegfsz6lvF5MnUSspNLvZWlOEm5Sgm3vf/h8uc7iuFb5J+zJPDcptK01CU62JVVFgopLYDtSfSF4vEnOWsm+9swpU1pBeS/B85/hbpj4xi/ml+7kpyX5VaZfFUE5zEVVaogZHpLqFCQHJIQaoC3N7i1uye8Xi802HxNudj8qKykrKTchEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREA//2Q==" alt="sing up image"></figure>
                        <a href="/care-webapp/admin" class="signup-image-link">Login as admin??</a>
                        <a href="/care-webapp/doctor/sign-up.php" class="signup-image-link">Login as doctor??</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="your_name" placeholder="Email adress..."/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <a href="sign-up.php" class="signup-image-link">New User? Create an account.</a>
                            <div class="form-group form-button">
                                <input type="submit" name="btn" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <a href="index.php" class="signup-image-link">Back to Website?</a>
        </section>
    </div>
</html>