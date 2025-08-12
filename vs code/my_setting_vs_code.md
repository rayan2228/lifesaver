## vs code json file

``` json
{
  // editor
  "editor.quickSuggestions": {
    "strings": "on"
  },
  "editor.fontSize": 16,
  "editor.fontFamily": "Fira Code, Operator Mono",
  "editor.fontLigatures": true,
  "editor.wordWrap": "on",
  "editor.tokenColorCustomizations": {
    "textMateRules": [
      {
        "scope": "comment",
        "settings": {
          "fontStyle": "italic"
        }
      }
    ]
  },
  // cursor
  "editor.cursorSmoothCaretAnimation": "on",
  // config related to code formatting
  "editor.defaultFormatter": "esbenp.prettier-vscode",
  "editor.formatOnSave": true,
  "[javascript]": {
    "editor.formatOnSave": false,
    "editor.defaultFormatter": "esbenp.prettier-vscode"
  },
  "[javascriptreact]": {
    "editor.formatOnSave": false,
    "editor.defaultFormatter": "esbenp.prettier-vscode"
  },
  "editor.codeActionsOnSave": {
    "source.fixAll.eslint": "explicit",
    "source.fixAll.tslint": "explicit",
    "source.organizeImports": "explicit"
  },
  "eslint.alwaysShowStatus": true,
  //terminal
  "terminal.integrated.fontSize": 16,
  "terminal.integrated.fontWeight": "normal",
  "terminal.integrated.fontFamily": "Fira Code",
  "terminal.external.osxExec": "warp.app",
  "terminal.external.windowsExec": "C:\\Windows\\System32\\cmd.exe",
  "terminal.integrated.defaultProfile.windows": "Git Bash",
  // terminal customization
  "files.autoSave": "afterDelay",
  "editor.stickyScroll.enabled": false,
  "[typescriptreact]": {
    "editor.defaultFormatter": "vscode.typescript-language-features"
  },
  "editor.mouseWheelZoom": true,
  "editor.mouseWheelScrollSensitivity": 2,
  "github.copilot.enable": {
    "*": false,
    "plaintext": false,
    "markdown": false,
    "scminput": false,
    "typescriptreact": false
  },
  "tailwindCSS.emmetCompletions": true,
  "tailwindCSS.includeLanguages": {
    "html": "html",
    "javascript": "javascript",
    "css": "css"
  },
  "git.enableSmartCommit": true,
  "git.autofetch": true,
  "editor.codeActions.triggerOnFocusChange": true,
  "git.confirmSync": false,
  "codeium.enableConfig": {
    "*": true,
    "properties": true
  },
  "javascript.updateImportsOnFileMove.enabled": "always",
  "[prisma]": {
    "editor.defaultFormatter": "Prisma.prisma"
  },
  "editor.linkedEditing": true,
  "eslint.execArgv": null,
  "typescript.updateImportsOnFileMove.enabled": "always",
  "files.exclude": {
    "**/.git": false
  },
  "editor.minimap.autohide": "mouseover",
  "gitlens.advanced.messages": {
    "suppressCommitNotFoundWarning": true
  },
  "editor.cursorBlinking": "expand",
  "git.ignoreRebaseWarning": true,
  "workbench.colorTheme": "Xrodev",
  "workbench.iconTheme": "vscode-icons"
}


```
