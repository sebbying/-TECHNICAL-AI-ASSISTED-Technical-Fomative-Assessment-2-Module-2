<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title) ?> | POS</title>
    <style>
        body { font: 16px Arial, sans-serif; margin: 0; color: #202124; background: #f5f6f8; }
        header { background: #183b58; padding: 18px 7%; color: white; }
        header strong { margin-right: 28px; }
        nav { display: inline-flex; gap: 22px; }
        nav a { color: white; text-decoration: none; }
        nav a:hover { text-decoration: underline; }
        main { margin: 36px auto; width: min(1000px, 90%); }
        .card { background: white; padding: 24px; border: 1px solid #ddd; border-radius: 6px; overflow-x: auto; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border-bottom: 1px solid #e1e4e8; text-align: left; padding: 12px; }
        th { background: #edf2f6; }
        h1 { margin-top: 0; }
    </style>
</head>
<body>
<header><strong>POS Accounts</strong><nav><a href="<?= site_url('/') ?>">Home</a><a href="<?= site_url('customers') ?>">Customer Accounts</a><a href="<?= site_url('users') ?>">User Accounts</a></nav></header>
<main><div class="card">
