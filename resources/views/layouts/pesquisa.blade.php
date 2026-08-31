<div style="background-color: #E6CCFF; padding: 30px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-10">
                <form method="GET" action="{{ url()->current() }}" class="d-flex mb-4" style="gap: 8px;">
                    <input type="text" name="termo" value="{{ request('termo') }}" placeholder="Pesquisar..."
                           class="form-control"
                           style="border-radius: 30px; padding: 10px 20px; border: 1px solid #ccc;">
                    <button type="submit" class="btn_one">Buscar</button>
                </form>
            </div>
        </div>
    </div>
</div>