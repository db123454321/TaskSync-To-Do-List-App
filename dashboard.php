<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #8B5A2B, #D2B48C, #F5F5DC, #FFFFFF);
        }
        .sidebar {
            width: 260px;
            height: 100vh;
            background: linear-gradient(to bottom, #8B5A2B, #A0522D);
            color: #fff;
            padding: 20px;
            position: fixed;
            top: 0;
            left: -260px;
            transition: left 0.3s ease;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .sidebar.open {
            left: 0;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 12px;
            border-radius: 10px;
            margin: 5px 0;
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .sidebar a:hover {
            background-color: #A0522D;
        }
        .header {
            background: linear-gradient(to right, #A0522D, #8B5A2B);
            color: #fff;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            position: relative;
        }
        .header .menu-btn {
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
            margin-left: 10px;
        }
        .header .actions {
            display: flex;
            align-items: center;
        }
        .header .search-container {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }
        .container {
            display: flex;
            padding: 20px;
            margin-left: 0;
            transition: margin-left 0.3s ease;
        }
        .content {
            padding: 20px;
            flex: 1;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .task-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
        }
        .task-table th, .task-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        .task-table th {
            background-color: #8B5A2B;
            color: white;
        }
        .status {
            padding: 6px;
            border-radius: 5px;
            color: white;
        }
        .on-track { background-color: #4CAF50; }
        .at-risk { background-color: #FFEB3B; color: black; }
        .off-track { background-color: #F44336; }
        button {
            background: linear-gradient(to right, #A0522D, #8B5A2B);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background: #8B5A2B;
        }
    </style>
</head>
<body>

<div class="header">
    <div class="actions">
        <button class="menu-btn" onclick="toggleSidebar()"><i class="fas fa-bars"></i></button>
        <a href="#"><i class="fas fa-plus"></i> Create</a>
    </div>
    <div class="search-container">
        <input type="text" placeholder="Search..." />
    </div>
    <div class="dropdown">
        <i class="fas fa-ellipsis-v"></i>
    </div>
</div>

<div class="sidebar" id="sidebar">
    <a href="#"><i class="fas fa-home"></i> Home</a>
    <a href="#"><i class="fas fa-tasks"></i> My tasks</a>
    <a href="#"><i class="fas fa-inbox"></i> Inbox</a>
    <h3>Insights</h3>
    <a href="#"><i class="fas fa-chart-line"></i> Reporting</a>
    <a href="#"><i class="fas fa-folder"></i> Portfolios</a>
    <a href="#"><i class="fas fa-bullseye"></i> Goals</a>
    <h3>Projects</h3>
    <a href="#"><i class="fas fa-project-diagram"></i> Cross-functional project plan</a>
    <h3>Team</h3>
    <a href="#"><i class="fas fa-credit-card"></i> Add billing info</a>
    <a href="#"><i class="fas fa-user-plus"></i> Invite teammates</a>
</div>

<div class="container">
    <div class="content">
        <button><i class="fas fa-plus"></i> Add task</button>
        <table class="task-table">
            <thead>
                <tr>
                    <th>Task name</th>
                    <th>Assignee</th>
                    <th>Due date</th>
                    <th>Priority</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="fas fa-file-alt"></i> Draft project brief</td>
                    <td>DB Grace</td>
                    <td>Today – Mar 4</td>
                    <td>Low</td>
                    <td><span class="status on-track">On track</span></td>
                </tr>
                <tr>
                    <td><i class="fas fa-calendar-check"></i> Schedule kickoff meeting</td>
                    <td>DB Grace</td>
                    <td>Mar 3 – 5</td>
                    <td>Medium</td>
                    <td><span class="status at-risk">At risk</span></td>
                </tr>
                <tr>
                    <td><i class="fas fa-share"></i> Share timeline with teammates</td>
                    <td>DB Grace</td>
                    <td>Mar 4 – 6</td>
                    <td>High</td>
                    <td><span class="status off-track">Off track</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("open");
    }
</script>

</body>
</html>
