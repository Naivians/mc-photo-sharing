<?php
require "../db.php";
$uploadBtn = isset(getdisableUploadBtn()['isEnable']) && getdisableUploadBtn()['isEnable'] == "0" ? "disabled" : 'enable';
$scriptName = basename($_SERVER['SCRIPT_NAME']) ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<?php include "headers.php" ?>


<body class="bg-gray-50 p-6">

    <div class="toast" id="toast">
        <div class="toast-icon">✓</div>
        <span id="toastMessage">Upload successful!</span>
    </div>

    <div class="max-w-5xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">📸 Wedding Photo Dashboard</h1>

        <div class="grid grid-cols-2 gap-4 mb-6">
            <div class="bg-white p-4 rounded-2xl shadow">
                <p class="text-gray-500">Total Uploads</p>
                <h2 id="uploadCount" class="text-2xl font-semibold">0</h2>
            </div>
            <div class="bg-white p-4 rounded-2xl shadow">
                <p class="text-gray-500">Total Downloads</p>
                <h2 id="downloadCount" class="text-2xl font-semibold">0</h2>
            </div>
        </div>

        <div class="bg-white p-4 rounded-2xl shadow mb-6 flex items-center justify-between">
            <span class="text-gray-700">Enable Uploads</span>
            <input id="toggleUpload" type="checkbox" class="w-5 h-5" <?= $uploadBtn == "enable" ? "checked" : "" ?>>
        </div>

        <div class="bg-white p-4 rounded-2xl shadow">
            <h2 class="text-lg font-semibold mb-4">Photos</h2>

            <table class="w-full text-left">
                <thead>
                    <tr class="border-b">
                        <th class="py-2">ID</th>
                        <th class="py-2">Filename</th>
                    </tr>
                </thead>
                <tbody id="tableBody"></tbody>
            </table>

            <div class="flex justify-between items-center mt-4">
                <button id="prevBtn" class="px-3 py-1 bg-gray-200 rounded">Prev</button>
                <span id="pageInfo"></span>
                <button id="nextBtn" class="px-3 py-1 bg-gray-200 rounded">Next</button>
            </div>
        </div>
    </div>

    <script>
        let photos = [];
        let currentPage = 1;
        const perPage = 5;
        let uploads = photos.length;
        let downloads = 0;

        const uploadCount = document.getElementById('uploadCount');
        const downloadCount = document.getElementById('downloadCount');
        const toggleUpload = document.getElementById('toggleUpload');
        const uploadBtn = document.getElementById('uploadBtn');

        const tableBody = document.getElementById('tableBody');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const pageInfo = document.getElementById('pageInfo');

        const toast = document.getElementById('toast');
        const toastMessage = document.getElementById('toastMessage');

        function showToast(message) {

            toastMessage.textContent = message;

            toast.classList.add("show");

            setTimeout(() => {

                toast.classList.remove("show");

            }, 3000);

        }

        function actionButton(isEnableBtn) {
            $.ajax({
                url: "../disable_enable_btn.php",
                type: "POST",
                data: {
                    action_button: "upload_btn",
                    isEnable: isEnableBtn ? 1 : 0
                },
                success: (res) => {
                    res = JSON.parse(res)
                    if(!res.status){
                        showToast(res.msg)
                    }

                    showToast(res.msg);
                }
            });
        }

        toggleUpload.addEventListener("change", () => {
            actionButton(toggleUpload.checked);

            console.log(toggleUpload.checked);
            
        });



        function getPhoto() {
            $.ajax({
                url: "../retrieve.php",
                type: "GET",
                data: { getBtn: 1 },
                dataType: "json",
                success: (res) => {
                    if (!res.success) {
                        console.log("errror");
                    }

                    if (res.success) {
                        photos = res.data;
                        renderTable();
                    }
                },
                error: (err) => {
                    console.error(err);
                }
            });
        }
        getPhoto()

        function updateStats() {
            uploadCount.textContent = uploads;
            downloadCount.textContent = downloads;
        }

        function renderTable() {
            const tableBody = document.getElementById('tableBody');
            tableBody.innerHTML = '';

            const start = (currentPage - 1) * perPage;
            const paginated = photos.slice(start, start + perPage);

            paginated.forEach((photo, index) => {
                const row = `
            <tr class="border-b">
                <td class="py-2">${start + index + 1}</td>
                <td class="py-2">
                    <a href="${photo.url}" target="_blank" class="text-blue-600 underline">
                        ${photo.url.split('/').pop()}
                    </a>
                </td>
                <td class="py-2">${photo.type}</td>
            </tr>
        `;
                tableBody.innerHTML += row;
            });

            document.getElementById('pageInfo').textContent =
                `Page ${currentPage} of ${Math.ceil(photos.length / perPage)}`;
        }



        function downloadPhoto() {
            downloads++;
            updateStats();
        }

        prevBtn.addEventListener('click', () => {
            if (currentPage > 1) currentPage--;
            renderTable();
        });

        nextBtn.addEventListener('click', () => {
            if (currentPage < Math.ceil(photos.length / perPage)) currentPage++;
            renderTable();
        });

        updateStats();
        renderTable();
    </script>

</body>

</html>