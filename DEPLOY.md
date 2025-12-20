# Deploy (veilig)

Dit project draait op WordPress met een custom theme.

Belangrijk:
- **Zet nooit wachtwoorden / API keys / private keys in Git.**
- Gebruik bij voorkeur **SSH key-based auth** of een wachtwoord uit een **password manager**.

## Wat deploy je?
Meestal alleen het theme:
- `wp-content/themes/webbiecorn-starter-v2/`

## Optie A — SCP (simpel)
1) Maak een zip of upload de gewijzigde theme-bestanden.
2) Upload naar de server (Hostinger / SSH).
3) Test op live.
4) Bij cache issues: Hostinger hPanel → Purge Cache.

Voorbeeld (pas waarden aan):
```bash
scp -P <SSH_PORT> -r wp-content/themes/webbiecorn-starter-v2 <USER>@<HOST>:<REMOTE_PATH>/wp-content/themes/
```

## Optie B — rsync (sneller/incremental)
Voorbeeld (pas waarden aan):
```bash
rsync -avz -e "ssh -p <SSH_PORT>" --delete \
  wp-content/themes/webbiecorn-starter-v2/ \
  <USER>@<HOST>:<REMOTE_PATH>/wp-content/themes/webbiecorn-starter-v2/
```

## Optie C — VS Code SFTP (upload-on-save)
Gebruik het voorbeeldbestand `sftp.example.json` en kopieer dat lokaal naar:
- `.vscode/sftp.json`

Zorg dat `.vscode/` buiten Git blijft (staat al in `.gitignore`).

## Secrets / credentials
- Haal host/user/poort en remote path uit Hostinger hPanel.
- Als er ooit credentials in Git/gesharede files hebben gestaan: **roteer ze** (wachtwoord en/of keys).
