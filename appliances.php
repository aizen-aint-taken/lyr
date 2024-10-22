<?php
$appliances = [
    [
        'number' => 1,
        'image' => 'ref.jpeg',
        'brand' => 'Brand A',
        'price' => '$100',
        'action' => 'Buy Now'
    ],
    [
        'number' => 2,
        'image' => 'jems.jpg',
        'brand' => 'Brand Nigga',
        'price' => '$200',
        'action' => 'Buy Now'
    ],
    [
        'number' => 3,
        'image' => 'refrigirator.jpeg',
        'brand' => 'Brand C',
        'price' => '$300',
        'action' => 'Buy Now'
    ],
    [
        'number' => 4,
        'image' => 'refrigirator.jpeg',
        'brand' => 'Brand D',
        'price' => '$400',
        'action' => 'Buy Now'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appliances</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            border: 4px solid skyblue;
        }

        thead {
            background-color: #007bff;
            color: #fff;
            font-size: 18px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            border: 4px solid skyblue;
        }

        th {
            font-weight: bolder;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
            text-align: center;
        }

        .data {
            width: 100%;
            overflow-x: auto;
        }

        .data td {
            vertical-align: middle;
        }

        img {
            border: 4px solid skyblue;
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }

        button {
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            th, td {
                padding: 10px;
                font-size: 14px;
            }

            img {
                width: 80px;
                height: 80px;
            }

            button {
                padding: 6px 12px;
                font-size: 12px;
            }
        }

        @media (max-width: 576px) {
            th, td {
                padding: 8px;
                font-size: 12px;
            }

            img {
                width: 60px;
                height: 60px;
            }

            button {
                padding: 5px 10px;
                font-size: 10px;
            }
        }
    </style>
</head>
<body>
    <h1 class="text-center text-primary"> LYR Appliances</h1>
    <hr style="border: 2px solid skyblue">
    <div class="container">
        <form action="" method="">
            <table class="data">
                <thead>
                    <tr>
                        <th>Number</th>
                        <th>Image</th>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Action</th>
                        <th>Add</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($appliances as $appliance): ?>
                    <tr>
                        <td><?= $appliance["number"]; ?></td>
                        <td><img src="<?= $appliance["image"]?>" alt="Appliance Image"></td>
                        <td><?= $appliance["brand"]; ?></td>
                        <td><?= $appliance["price"]; ?></td>
                        <td><button type="button">Buy Now</button></td>
                        <td><button type="button">Add to Cart</button></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </form>
    </div>
    <script>
        function AddToCart(id){

        }
    </script>
</body>
</html>
