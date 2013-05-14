class InstallComponent extends Component {
    // Return a non-true result halt the install operation.
    public function beforeInstall() {
        return true;
    }

    // Called after each successful install operation.
    public function afterInstall() {
    }

    // Return a non-true result halt the uninstall operation.
    public function beforeUninstall() {
        return true;
    }

    // Called after each successful uninstall operation.
    public function afterUninstall() {
    }

    // Return a non-true result halt the enable operation.
    public function beforeEnable() {
        return true;
    }

    // Called after each successful enable operation.
    public function afterEnable() {
    }

    // Return a non-true result halt the disable operation.
    public function beforeDisable() {
        return true;
    }

    // Called after each successful disable operation.
    public function afterDisable() {
    }
}
