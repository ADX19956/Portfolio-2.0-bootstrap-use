{ pkgs }: {
  deps = [
    pkgs.unixtools.ping
    pkgs.nettools
    pkgs.php74
    pkgs.wget
    pkgs.htop
    pkgs.sudo
    pkgs.nano
    pkgs.nodePackages.vscode-langservers-extracted
    pkgs.nodePackages.typescript-language-server
  ];
}