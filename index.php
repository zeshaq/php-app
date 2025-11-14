<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello OpenShift</title>
    <style>
        body { 
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            display: grid;
            place-items: center;
            min-height: 90vh;
            background-color: #f4f7fa;
            color: #2c3e50;
        }
        div {
            background-color: #ffffff;
            padding: 3rem 4rem;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1 { 
            color: #3498db;
            margin-top: 0;
        }
        p {
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div>
        <h1>Hello from OpenShift!</h1>
        <p>This PHP application is deployed via OpenShift Pipelines and GitOps.</p>
        <p>PHP Version: <?php echo phpversion(); ?></p>
    </div>
</body>
</html>
