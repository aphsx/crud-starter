<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-10">
        <h1 class="text-center text-3xl font-bold mb-8">Product List</h1>

        <!-- ปุ่มเพิ่มสินค้า -->
        <div class="flex justify-end mb-4">
            <a href="add_item.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add New Item</a>
        </div>

        <!-- ตารางแสดงรายการสินค้า -->
        <div class="bg-white shadow-md rounded p-4">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-gray-200">Name</th>
                        <th class="py-2 px-4 bg-gray-200">Description</th>
                        <th class="py-2 px-4 bg-gray-200">Image</th>
                        <th class="py-2 px-4 bg-gray-200">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'list_items.php'; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
