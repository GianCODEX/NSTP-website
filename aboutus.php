/* ===== RESET ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", Tahoma, Arial, sans-serif;
}

/* ===== BODY ===== */
body {
    background: #f4f6f8;
    color: #333;
}

/* ===== CONTAINER ===== */
.container {
    display: flex;
    min-height: 100vh;
}

/* ===== SIDEBAR ===== */
.sidebar {
    width: 260px;
    background: #1f2937; /* dark gray */
    color: #fff;
    padding: 20px;
    overflow-y: auto;
}

.sidebar h3 {
    margin-bottom: 15px;
    font-size: 18px;
    border-bottom: 1px solid #374151;
    padding-bottom: 10px;
}

.sidebar .panel {
    display: block;
    padding: 10px 12px;
    margin-bottom: 6px;
    color: #e5e7eb;
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.2s;
}

.sidebar .panel:hover {
    background: #374151;
}

/* ===== MAIN CONTENT ===== */
.main {
    flex: 1;
    padding: 25px;
}

/* ===== HEADINGS ===== */
.main h2 {
    margin-bottom: 20px;
    font-size: 24px;
}

/* ===== SEARCH FORM ===== */
.search-form {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
}

.search-form input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

.search-form button {
    padding: 10px 16px;
    border: none;
    background: #2563eb;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

.search-form button:hover {
    background: #1d4ed8;
}

/* ===== TABLE ===== */
.records-table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}

.records-table thead {
    background: #2563eb;
    color: #fff;
}

.records-table th,
.records-table td {
    padding: 12px 14px;
    text-align: left;
    font-size: 14px;
}

.records-table tbody tr {
    border-bottom: 1px solid #e5e7eb;
}

.records-table tbody tr:hover {
    background: #f9fafb;
}

/* ===== STATUS ===== */
.status {
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
}

.status.pending {
    background: #fde68a;
    color: #92400e;
}

/* ===== ACTION LINKS ===== */
.records-table a {
    text-decoration: none;
    color: #2563eb;
    font-weight: 500;
}

.records-table a:hover {
    text-decoration: underline;
}

/* ===== RECORD VIEW ===== */
.record-view {
    margin-top: 25px;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}

.record-view h3 {
    margin-bottom: 15px;
    font-size: 18px;
    border-bottom: 1px solid #e5e7eb;
    padding-bottom: 8px;
}

.record-view p {
    margin-bottom: 8px;
    font-size: 14px;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 900px) {
    .container {
        flex-direction: column;
    }

    .sidebar {
        width: 100%;
        height: auto;
    }
}

.sidebar a {
    display: block;
    color: white;
    padding: 15px 20px;
    text-decoration: none;
    font-size: 16px;
}

.sidebar a:hover {
    background-color: #34495e;
}
