
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Tagihan - BagiBill</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --butter-yellow: #F9E7A2;
            --yellow-dark: #E9C85B;
            --brown: #493A2B;
            --text: #554735;
            --white: #FFFFFF;
            --background: #FFFCF3;
            --border: #EFE5C9;
            --green: #547A50;
            --red: #C75B50;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background: var(--background);
            color: var(--brown);
        }

        nav {
            background: var(--white);
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--border);
        }

        .logo {
            font-size: 27px;
            font-weight: 900;
            color: var(--brown);
            text-decoration: none;
        }

        .back-link {
            text-decoration: none;
            color: var(--text);
            font-weight: 700;
        }

        .container {
            max-width: 900px;
            margin: 45px auto;
            padding: 0 20px 60px;
        }

        .page-heading {
            text-align: center;
            margin-bottom: 35px;
        }

        .page-heading h1 {
            font-size: 34px;
            font-weight: 900;
            margin-bottom: 8px;
        }

        .page-heading p {
            color: #81735F;
        }

        .steps {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .step {
            background: #F1EBD9;
            color: #887B64;
            padding: 9px 17px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 800;
        }

        .step.active {
            background: var(--butter-yellow);
            color: var(--brown);
        }

        .card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 28px;
            margin-bottom: 22px;
            box-shadow: 0 5px 20px rgba(73, 58, 43, 0.04);
        }

        .card h2 {
            font-size: 21px;
            margin-bottom: 7px;
        }

        .description {
            color: #8A7D69;
            font-size: 14px;
            margin-bottom: 23px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-weight: 800;
            margin-bottom: 8px;
            font-size: 14px;
        }

        input, select {
            width: 100%;
            padding: 13px 15px;
            border: 1px solid var(--border);
            border-radius: 10px;
            font-family: inherit;
            font-size: 15px;
            color: var(--brown);
            outline: none;
            background: white;
        }

        input:focus, select:focus {
            border-color: var(--yellow-dark);
            box-shadow: 0 0 0 3px rgba(233, 200, 91, 0.15);
        }

        .member-card {
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 20px;
            margin-bottom: 18px;
            background: #FFFEFA;
        }

        .member-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            margin-bottom: 17px;
        }

        .member-header h3 {
            font-size: 17px;
        }

        .remove-button {
            border: none;
            background: #FFF0ED;
            color: var(--red);
            padding: 7px 12px;
            border-radius: 8px;
            font-family: inherit;
            font-weight: 800;
            cursor: pointer;
        }

        .order-row {
            display: grid;
            grid-template-columns: 1fr 170px 38px;
            gap: 10px;
            margin-bottom: 10px;
            align-items: center;
        }

        .delete-order {
            height: 42px;
            border: none;
            border-radius: 9px;
            background: #FFF0ED;
            color: var(--red);
            font-size: 20px;
            cursor: pointer;
        }

        .add-order {
            border: none;
            background: transparent;
            color: var(--green);
            font-family: inherit;
            font-weight: 900;
            cursor: pointer;
            margin-top: 8px;
        }

        .member-subtotal {
            text-align: right;
            font-weight: 900;
            margin-top: 15px;
            padding-top: 12px;
            border-top: 1px dashed var(--border);
        }

        .add-member {
            width: 100%;
            padding: 14px;
            border: 2px dashed var(--yellow-dark);
            background: #FFFCF1;
            color: var(--brown);
            border-radius: 12px;
            font-family: inherit;
            font-size: 15px;
            font-weight: 900;
            cursor: pointer;
        }

        .tax-options {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        .tax-option {
            flex: 1;
            padding: 12px;
            border: 1px solid var(--border);
            border-radius: 10px;
            background: white;
            font-family: inherit;
            font-weight: 800;
            cursor: pointer;
        }

        .tax-option.active {
            background: var(--butter-yellow);
            border-color: var(--yellow-dark);
        }

        .tax-note {
            color: #8A7D69;
            font-size: 13px;
            margin-top: 8px;
        }

        .total-preview {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-top: 1px solid var(--border);
            margin-top: 15px;
            font-weight: 900;
        }

        .main-button {
            display: block;
            width: 100%;
            border: none;
            background: var(--butter-yellow);
            color: var(--brown);
            padding: 16px;
            border-radius: 12px;
            font-family: inherit;
            font-size: 16px;
            font-weight: 900;
            cursor: pointer;
            transition: 0.2s;
        }

        .main-button:hover {
            background: var(--yellow-dark);
        }

        .result-member {
            background: #FFFEFA;
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 17px;
            margin-bottom: 12px;
        }

        .result-member h3 {
            margin-bottom: 10px;
        }

        .result-line {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            margin: 6px 0;
            color: #766A57;
            font-size: 14px;
        }

        .result-final {
            border-top: 1px dashed var(--border);
            padding-top: 10px;
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            font-weight: 900;
        }

        .grand-total {
            background: var(--butter-yellow);
            border-radius: 13px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            font-weight: 900;
            font-size: 18px;
            margin-top: 18px;
        }

        .hidden {
            display: none;
        }

        @media (max-width: 600px) {
            nav {
                padding: 16px 5%;
            }

            .container {
                margin-top: 30px;
            }

            .page-heading h1 {
                font-size: 27px;
            }

            .card {
                padding: 20px;
            }

            .order-row {
                grid-template-columns: 1fr 110px 34px;
                gap: 6px;
            }

            .order-row input {
                padding: 11px 8px;
                font-size: 13px;
            }
        }
    </style>
</head>

<body>

<nav>
    <a href="/" class="logo">BagiBill</a>
    <a href="/" class="back-link">← Kembali</a>
</nav>

<main class="container">

    <div class="page-heading">
        <h1>Buat Tagihan Baru</h1>
        <p>Masukkan pesanan setiap orang, lalu biarkan BagiBill menghitungnya.</p>
    </div>

    <div class="steps">
        <div class="step active">01. Informasi & Pesanan</div>
        <div class="step active">02. Pengaturan PPN</div>
        <div class="step">03. Hasil Tagihan</div>
    </div>

    <section class="card">
        <h2>01. Informasi Tagihan</h2>
        <p class="description">Isi informasi dasar tagihan yang akan dibagikan.</p>

        <div class="form-group">
            <label for="creator">Nama Pembuat Tagihan</label>
            <input type="text" id="creator" placeholder="Contoh: Muthya">
        </div>

        <div class="form-group">
            <label for="billName">Nama Tagihan</label>
            <input type="text" id="billName" placeholder="Contoh: Makan-makan di Resto ABC">
        </div>
    </section>

    <section class="card">
        <h2>02. Anggota dan Pesanan</h2>
        <p class="description">Tambahkan semua anggota dan masukkan pesanan masing-masing.</p>

        <div id="members"></div>

        <button type="button" class="add-member" onclick="addMember()">
            + Tambah Anggota
        </button>
    </section>

    <section class="card">
        <h2>03. Pengaturan PPN</h2>
        <p class="description">
            Masukkan PPN sesuai struk restoran. Kosongkan jika tidak ada PPN.
        </p>

        <div class="tax-options">
            <button type="button" class="tax-option active" id="percentButton" onclick="setTaxMode('percent')">
                Persentase (%)
            </button>
            <button type="button" class="tax-option" id="nominalButton" onclick="setTaxMode('nominal')">
                Nominal (Rp)
            </button>
        </div>

        <div class="form-group">
            <label id="taxLabel" for="taxInput">Persentase PPN</label>
            <input type="number" id="taxInput" min="0" step="any" placeholder="Contoh: 11" oninput="updatePreview()">
            <p class="tax-note" id="taxNote">
                PPN akan dihitung dari total pesanan.
            </p>
        </div>

        <div class="total-preview">
            <span>Total Pesanan</span>
            <span id="previewSubtotal">Rp0</span>
        </div>

        <div class="total-preview">
            <span>Total PPN</span>
            <span id="previewTax">Rp0</span>
        </div>

        <div class="total-preview">
            <span>Total Tagihan</span>
            <span id="previewGrandTotal">Rp0</span>
        </div>
    </section>

    <button type="button" class="main-button" onclick="calculateBill()">
        Hitung Tagihan →
    </button>

    <section class="card hidden" id="resultSection" style="margin-top:25px;">
        <h2>Hasil Perhitungan Tagihan</h2>
        <p class="description" id="resultBillName"></p>

        <div id="resultMembers"></div>

        <div class="grand-total">
            <span>Total Keseluruhan</span>
            <span id="resultGrandTotal">Rp0</span>
        </div>
    </section>

</main>

<script>
    let memberCount = 0;
    let taxMode = 'percent';

    function formatRupiah(value) {
        return 'Rp' + Math.round(value).toLocaleString('id-ID');
    }

    function addMember() {
        memberCount++;

        const memberId = memberCount;

        const member = document.createElement('div');
        member.className = 'member-card';
        member.dataset.memberId = memberId;

        member.innerHTML = `
            <div class="member-header">
                <h3>Anggota ${memberId}</h3>
                <button type="button" class="remove-button" onclick="removeMember(this)">
                    Hapus
                </button>
            </div>

            <div class="form-group">
                <label>Nama Anggota</label>
                <input type="text" class="member-name" placeholder="Contoh: Andi">
            </div>

            <label>Daftar Pesanan</label>
            <div class="orders"></div>

            <button type="button" class="add-order" onclick="addOrder(this)">
                + Tambah Pesanan
            </button>

            <div class="member-subtotal">
                Subtotal: <span class="subtotal-value">Rp0</span>
            </div>
        `;

        document.getElementById('members').appendChild(member);

        addOrder(member.querySelector('.add-order'));
        updatePreview();
    }

    function addOrder(button) {
        const member = button.closest('.member-card');
        const orders = member.querySelector('.orders');

        const order = document.createElement('div');
        order.className = 'order-row';

        order.innerHTML = `
            <input type="text" class="order-name" placeholder="Nama pesanan">
            <input type="number" class="order-price" min="0" step="1" placeholder="Harga (Rp)">
            <button type="button" class="delete-order" onclick="removeOrder(this)">×</button>
        `;

        orders.appendChild(order);

        order.querySelector('.order-price').addEventListener('input', updatePreview);
        updatePreview();
    }

    function removeMember(button) {
        button.closest('.member-card').remove();
        updatePreview();
    }

    function removeOrder(button) {
        const orders = button.closest('.orders');

        if (orders.querySelectorAll('.order-row').length <= 1) {
            alert('Setiap anggota harus memiliki minimal satu baris pesanan.');
            return;
        }

        button.closest('.order-row').remove();
        updatePreview();
    }

    function getMemberData() {
        const members = [];

        document.querySelectorAll('.member-card').forEach(member => {
            const name = member.querySelector('.member-name').value.trim();

            const orders = [];
            let subtotal = 0;

            member.querySelectorAll('.order-row').forEach(row => {
                const orderName = row.querySelector('.order-name').value.trim();
                const price = Number(row.querySelector('.order-price').value) || 0;

                if (orderName && price > 0) {
                    orders.push({
                        name: orderName,
                        price: price
                    });

                    subtotal += price;
                }
            });

            member.querySelector('.subtotal-value').textContent = formatRupiah(subtotal);

            if (name && orders.length > 0) {
                members.push({
                    name: name,
                    orders: orders,
                    subtotal: subtotal
                });
            }
        });

        return members;
    }

    function getTaxAmount(subtotal) {
        const input = Number(document.getElementById('taxInput').value) || 0;

        if (taxMode === 'percent') {
            return subtotal * input / 100;
        }

        return input;
    }

    function setTaxMode(mode) {
        taxMode = mode;

        document.getElementById('percentButton').classList.toggle('active', mode === 'percent');
        document.getElementById('nominalButton').classList.toggle('active', mode === 'nominal');

        const label = document.getElementById('taxLabel');
        const input = document.getElementById('taxInput');
        const note = document.getElementById('taxNote');

        if (mode === 'percent') {
            label.textContent = 'Persentase PPN (%)';
            input.placeholder = 'Contoh: 11';
            note.textContent = 'PPN dihitung berdasarkan persentase dari total pesanan.';
        } else {
            label.textContent = 'Nominal PPN (Rp)';
            input.placeholder = 'Contoh: 15000';
            note.textContent = 'Masukkan total nominal PPN yang tertera pada struk.';
        }

        updatePreview();
    }

    function updatePreview() {
        const members = getMemberData();

        const subtotal = members.reduce((sum, member) => sum + member.subtotal, 0);
        const tax = getTaxAmount(subtotal);
        const grandTotal = subtotal + tax;

        document.getElementById('previewSubtotal').textContent = formatRupiah(subtotal);
        document.getElementById('previewTax').textContent = formatRupiah(tax);
        document.getElementById('previewGrandTotal').textContent = formatRupiah(grandTotal);
    }

    function calculateBill() {
        const creator = document.getElementById('creator').value.trim();
        const billName = document.getElementById('billName').value.trim();
        const members = getMemberData();

        if (!creator || !billName) {
            alert('Nama pembuat dan nama tagihan harus diisi.');
            return;
        }

        if (members.length === 0) {
            alert('Tambahkan minimal satu anggota dengan nama dan pesanan yang lengkap.');
            return;
        }

        const allMemberCards = document.querySelectorAll('.member-card');
        const invalidMember = Array.from(allMemberCards).some(member => {
            const name = member.querySelector('.member-name').value.trim();
            const hasValidOrder = Array.from(member.querySelectorAll('.order-row')).some(row => {
                return row.querySelector('.order-name').value.trim() &&
                    Number(row.querySelector('.order-price').value) > 0;
            });

            return !name || !hasValidOrder;
        });

        if (invalidMember) {
            alert('Pastikan setiap anggota memiliki nama dan minimal satu pesanan dengan harga.');
            return;
        }

        const subtotalAll = members.reduce((sum, member) => sum + member.subtotal, 0);
        const totalTax = getTaxAmount(subtotalAll);

        if (totalTax < 0 || !Number.isFinite(totalTax)) {
            alert('Masukkan PPN yang valid.');
            return;
        }

        const resultContainer = document.getElementById('resultMembers');
        resultContainer.innerHTML = '';

        members.forEach(member => {
            const allocatedTax = subtotalAll > 0
                ? totalTax * member.subtotal / subtotalAll
                : 0;

            const memberTotal = member.subtotal + allocatedTax;

            const orderHTML = member.orders.map(order => `
                <div class="result-line">
                    <span>${escapeHTML(order.name)}</span>
                    <span>${formatRupiah(order.price)}</span>
                </div>
            `).join('');

            const result = document.createElement('div');
            result.className = 'result-member';

            result.innerHTML = `
                <h3>${escapeHTML(member.name)}</h3>
                ${orderHTML}
                <div class="result-line">
                    <span>Subtotal</span>
                    <span>${formatRupiah(member.subtotal)}</span>
                </div>
                <div class="result-line">
                    <span>Alokasi PPN</span>
                    <span>${formatRupiah(allocatedTax)}</span>
                </div>
                <div class="result-final">
                    <span>Total yang harus dibayar</span>
                    <span>${formatRupiah(memberTotal)}</span>
                </div>
            `;

            resultContainer.appendChild(result);
        });

        document.getElementById('resultBillName').textContent =
            billName + ' — Dibuat oleh ' + creator;

        document.getElementById('resultGrandTotal').textContent =
            formatRupiah(subtotalAll + totalTax);

        const resultSection = document.getElementById('resultSection');
        resultSection.classList.remove('hidden');

        resultSection.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }

    function escapeHTML(value) {
        return String(value).replace(/[&<>"']/g, character => ({
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        })[character]);
    }

    addMember();
    addMember();
</script>

</body>
</html>
