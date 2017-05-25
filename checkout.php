    <?php $page_title = "Place an Order";
    include ('../htdocs/header.html');

    // Check for order submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //Minimal order form validation:
        if (isset($_POST['name'], $_POST['email'], $_POST['pickup_time'], $_POST['order'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pickup_time = $_POST['pickup_time'];
            }
        }


    }

    ?>