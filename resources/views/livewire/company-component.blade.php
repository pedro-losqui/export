<div class="row mt-4">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="text-center" wire:loading.remove wire:target="report">
                            <h3>Relatório de inconsistência Empresas</h3>
                            <hr>
                            <div class="row mt-2">
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="date" wire:model='from' class="form-control" id="floatingInput">
                                        <label for="">Data inicial</label>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="Date" wire:model='to' class="form-control" id="floatingInput">
                                        <label for="">Data final</label>
                                    </div>
                                </div>
                            </div>
                            <button type="button" wire:click='report'
                                class="btn btn-success waves-effect waves-light mt-1">Gerar
                                relatório</button>
                        </div>
                        <div class="text-center">
                            <div class="col-md-12" wire:loading wire:target="report">
                                <div class="button-list mb-1 mb-sm-0">
                                    <button class="btn btn-success mt-2" type="button">
                                        <span class="spinner-border spinner-border-sm me-1" role="status"
                                            aria-hidden="true"></span>
                                        Gerando relatório...
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
