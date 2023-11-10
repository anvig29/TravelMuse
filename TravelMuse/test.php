<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <title>review section</title>
    <link rel="stylesheet" href="review.css">
    <style>
        .review-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: darkblue;
        }

        .flip-card {
            width: 300px;
            height: 400px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: lightyellow;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .flip-card-back {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transform: rotateY(180deg);
        }

        .flip-card img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .flip-card h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .flip-card p {
            font-size: 16px;
            padding: 0 20px;
        }

        h2 {
            color: white;
        }

        label {
            color: white;
        }
    </style>

</head>
<body>

        <section class="reviews">
            
        </section>




    <section>
        <div class="review-section">
            <h2>Type Something</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="review">Review:</label>
                    <textarea id="review" name="review" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">share</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>