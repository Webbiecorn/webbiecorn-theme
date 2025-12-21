# Deploy (veilig)

Dit project draait op WordPress met een custom theme.

Belangrijk:
- **Zet nooit wachtwoorden / API keys / private keys in Git.**
- Gebruik bij voorkeur **SSH key-based auth** of een wachtwoord uit een **password manager**.

## Wat deploy je?
Meestal alleen het theme:
- `wp-content/themes/webbiecorn-starter-v2/`

## Aanbevolen — SSH key + `Host webbiecorn`
Dit is de meest betrouwbare manier (geen wachtwoordprompts, geschikt voor `rsync`).

### Huidige server-gegevens (zonder secrets)
- **Host:** `147.93.92.120`
- **SSH port:** `65002`
- **User:** `u265705302`
- **Remote theme path:** `/home/u265705302/domains/webbiecorn.nl/public_html/wp-content/themes/webbiecorn-starter-v2/`

### 1) SSH key toevoegen in Hostinger
- Voeg je **public key** toe in Hostinger hPanel → SSH Access / SSH Keys.
- Public key ophalen:

```bash
cat ~/.ssh/id_ed25519.pub
```

### 2) SSH alias maken (`~/.ssh/config`)
Voeg toe:

```sshconfig
Host webbiecorn
  HostName 147.93.92.120
  User u265705302
  Port 65002
  IdentityFile ~/.ssh/id_ed25519
  IdentitiesOnly yes
  StrictHostKeyChecking accept-new
```

Test:

```bash
ssh -o BatchMode=yes webbiecorn 'echo SSH_OK && whoami && pwd'
```

### 3) Deploy met `rsync` (sneller/incremental)
Aanrader: exclude dev/docs bestanden.

```bash
rsync -avz --delete \
  --exclude ".git/" \
  --exclude ".vscode/" \
  --exclude "node_modules/" \
  --exclude "DEPLOY.md" \
  --exclude "README.md" \
  --exclude "sftp.example.json" \
  wp-content/themes/webbiecorn-starter-v2/ \
  webbiecorn:/home/u265705302/domains/webbiecorn.nl/public_html/wp-content/themes/webbiecorn-starter-v2/
```

Let op: `--delete` verwijdert geen bestanden die je met `--exclude` uitsluit. Als er eerder per ongeluk docs/dev-bestanden zijn geüpload, kun je die 1x opschonen:

```bash
ssh webbiecorn 'cd /home/u265705302/domains/webbiecorn.nl/public_html/wp-content/themes/webbiecorn-starter-v2 && rm -f DEPLOY.md README.md sftp.example.json .gitignore && rm -rf .git .vscode node_modules'
```

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
