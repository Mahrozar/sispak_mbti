<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBTI Job Recommendation</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-800">MBTI Job Recommendation</h1>
        <p class="text-gray-600 mt-2">Find the best job based on your MBTI</p>

        <input type="text" id="mbtiInput" class="mt-4 p-2 border rounded" placeholder="Enter MBTI type (e.g. INFP)">
        <button onclick="getJob()" class="bg-blue-500 text-white px-4 py-2 rounded ml-2">Find Job</button>

        <ul id="result" class="mt-4 text-xl font-semibold text-gray-800"></ul>
    </div>

    <script>
        function getJob() {
            let type = document.getElementById("mbtiInput").value.trim().toUpperCase();
            let result = document.getElementById("result");

            result.innerHTML = "Loading...";

            fetch(`/mbti/${type}`)
                .then(res => {
                    if (!res.ok) {
                        throw new Error("MBTI type not found");
                    }
                    return res.json();
                })
                .then(data => {
                    if (data.job_recommendations && data.job_recommendations.length > 0) {
                        result.innerHTML = data.job_recommendations
                            .map(job => `<li class="list-disc">${job}</li>`)
                            .join("");
                    } else {
                        result.innerHTML = "<p class='text-red-500'>No jobs found</p>";
                    }
                })
                .catch(err => {
                    result.innerHTML = `<p class='text-red-500'>${err.message}</p>`;
                });
        }
    </script>
</body>
</html>
