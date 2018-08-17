<div class="tables-nav-block">
    @if($table->name !== 'basics')
    <div class="left">
        <button type="button" class="Polaris-Button">
            <span class="Polaris-Button__Content">
                <span>Previous</span>
            </span>
        </button>
    </div>
    @endif
    @if($table->name !== 'Travel Help')
    <div class="right">
        <button type="button" class="Polaris-Button Polaris-Button--primary">
            <span class="Polaris-Button__Content">
                <span>Next</span>
            </span>
        </button>
    </div>
    @endif
</div>