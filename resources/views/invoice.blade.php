<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beautiful Invoice</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, sans-serif;
            background: linear-gradient(135deg,
                    #f0fdf4 0%,
                    #ffffff 50%,
                    #f0fdf4 100%);
            min-height: 100vh;
            padding: 2rem;
            color: #111827;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #065f46 0%, #047857 100%);
            color: #ffffff;
            padding: 3rem 2rem;
            position: relative;
        }

        .header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .header-content {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-section h1 {
            font-size: 3rem;
            font-weight: 900;
            color: #ffffff;
            margin-bottom: 0.5rem;
            letter-spacing: 2px;
        }

        .logo-section p {
            font-size: 1.25rem;
            color: #ffffff;
            opacity: 0.9;
        }

        .invoice-info {
            text-align: right;
        }

        .invoice-number {
            font-size: 2rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 0.5rem;
        }

        .status-badge {
            background: #ffffff;
            color: #065f46;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-weight: 700;
            font-size: 0.875rem;
        }

        .content {
            padding: 2rem;
        }

        .section {
            margin-bottom: 2rem;
        }

        .grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .card {
            background: #f9fafb;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 1.5rem;
        }

        .card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .icon {
            width: 24px;
            height: 24px;
            background: #065f46;
            border-radius: 6px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .icon::before {
            content: "🏢";
            font-size: 12px;
        }

        .card p {
            color: #374151;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .company-name {
            font-size: 1.125rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 0.75rem;
        }

        .table-container {
            background: white;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .table-header {
            background: linear-gradient(135deg, #065f46 0%, #047857 100%);
            color: #ffffff;
            padding: 1.5rem;
        }

        .table-header h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #ffffff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f3f4f6;
            color: #111827;
            font-weight: 700;
            padding: 1rem;
            text-align: left;
            border-bottom: 2px solid #e5e7eb;
        }

        td {
            padding: 1rem;
            border-bottom: 1px solid #e5e7eb;
            color: #374151;
        }

        tr:nth-child(even) {
            background: #f9fafb;
        }

        .item-name {
            font-weight: 600;
            color: #111827;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .totals-section {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 2rem;
        }

        .totals-card {
            background: white;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            overflow: hidden;
            min-width: 300px;
        }

        .totals-content {
            padding: 1.5rem;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
            font-size: 1.125rem;
        }

        .total-row.final {
            border-top: 2px solid #e5e7eb;
            padding-top: 1rem;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .total-label {
            color: #374151;
        }

        .total-amount {
            color: #111827;
            font-weight: 600;
        }

        .final .total-amount {
            color: #065f46;
        }

        .payment-status {
            background: linear-gradient(135deg, #065f46 0%, #047857 100%);
            color: #ffffff;
            padding: 1rem;
            text-align: center;
            font-weight: 700;
        }

        .footer {
            background: #f9fafb;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
        }

        .footer h4 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 1rem;
        }

        .footer p {
            color: #374151;
            margin-bottom: 0.5rem;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .grid-2 {
                grid-template-columns: 1fr;
            }

            .header-content {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            .invoice-info {
                text-align: center;
            }

            body {
                padding: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="header-content">
                <div class="logo-section">
                    <h1>INVOICE</h1>
                    <p>Acme Design Studio</p>
                </div>
                <div class="invoice-info">
                    <div class="invoice-number">INV-2024-001</div>
                    <span class="status-badge">✓ Paid</span>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <!-- Company Information -->
            <div class="grid-2">
                <div class="card">
                    <h3><span class="icon"></span> From</h3>
                    <div class="company-name">Acme Design Studio</div>
                    <p>123 Creative Street</p>
                    <p>San Francisco, CA 94102</p>
                    <p>📞 +1 (555) 123-4567</p>
                    <p>✉️ hello@acmedesign.com</p>
                </div>

                <div class="card">
                    <h3><span class="icon"></span> Bill To</h3>
                    <div class="company-name">TechCorp Solutions</div>
                    <p>Attn: Sarah Johnson</p>
                    <p>456 Business Ave</p>
                    <p>New York, NY 10001</p>
                    <p>📞 +1 (555) 987-6543</p>
                    <p>✉️ sarah@techcorp.com</p>
                </div>
            </div>

            <!-- Invoice Details -->
            <div class="card section">
                <div style="
                            display: grid;
                            grid-template-columns: repeat(
                                auto-fit,
                                minmax(200px, 1fr)
                            );
                            gap: 1rem;
                        ">
                    <div>
                        <strong style="color: #065f46">Invoice Number:</strong><br />
                        <span style="color: #111827; font-weight: 600">INV-2024-001</span>
                    </div>
                    <div>
                        <strong style="color: #065f46">Invoice Date:</strong><br />
                        <span style="color: #111827; font-weight: 600">January 15, 2024</span>
                    </div>
                    <div>
                        <strong style="color: #065f46">Due Date:</strong><br />
                        <span style="color: #111827; font-weight: 600">February 14, 2024</span>
                    </div>
                </div>
            </div>

            @pageBreak
            
            <!-- Line Items -->
            <div class="table-container">
                <div class="table-header">
                    <h3>📦 Services & Products</h3>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th class="text-center">Qty</th>
                            <th class="text-right">Rate</th>
                            <th class="text-right">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="item-name">
                                    Website Design & Development
                                </div>
                                <small style="color: #6b7280">Complete responsive website with modern
                                    design</small>
                            </td>
                            <td class="text-center">1</td>
                            <td class="text-right">$5,000</td>
                            <td class="text-right">
                                <strong>$5,000</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="item-name">
                                    Brand Identity Package
                                </div>
                                <small style="color: #6b7280">Logo design, brand guidelines, and
                                    assets</small>
                            </td>
                            <td class="text-center">1</td>
                            <td class="text-right">$2,500</td>
                            <td class="text-right">
                                <strong>$2,500</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="item-name">
                                    UI/UX Consultation
                                </div>
                                <small style="color: #6b7280">User experience optimization
                                    sessions</small>
                            </td>
                            <td class="text-center">10</td>
                            <td class="text-right">$150</td>
                            <td class="text-right">
                                <strong>$1,500</strong>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="item-name">
                                    Mobile App Wireframes
                                </div>
                                <small style="color: #6b7280">Detailed wireframes for mobile
                                    application</small>
                            </td>
                            <td class="text-center">1</td>
                            <td class="text-right">$1,200</td>
                            <td class="text-right">
                                <strong>$1,200</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Totals -->
            <div class="totals-section">
                <div class="totals-card">
                    <div class="totals-content">
                        <div class="total-row">
                            <span class="total-label">Subtotal:</span>
                            <span class="total-amount">$10,200</span>
                        </div>
                        <div class="total-row">
                            <span class="total-label">Tax (9%):</span>
                            <span class="total-amount">$918</span>
                        </div>
                        <div class="total-row final">
                            <span class="total-label">Total:</span>
                            <span class="total-amount">$11,118</span>
                        </div>
                    </div>
                    <div class="payment-status">
                        ✓ Payment Complete - Received January 20, 2024
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="footer">
                <h4>💳 Payment Information</h4>
                <p>
                    Payment is due within 30 days of invoice date. Please
                    include invoice number with payment.
                </p>
                <p>
                    Thank you for your business! For questions, contact us
                    at
                    <strong style="color: #065f46">hello@acmedesign.com</strong>
                </p>
            </div>
        </div>
    </div>
</body>

</html>