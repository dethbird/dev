
### hosted domains
- make sure A names are there for your new domains
    - wwww.domain.com and domain.com


### create cpanel
- create cpanel for new account

### change docroot for root domain
- login as root

```bash
vim /var/cpanel/userdata/USERNAME/DOMAINNAME.COM
```

change:
```bash
documentroot: /home/USERNAME/public_html/NEW_PATH
```

rebuild / restart apache
```
/scripts/rebuildhttpdconf
service httpd restart
```

### change docroot permissions

public_html: 755

in /public
```bash
chmod 644 index.php .htaccess
```


### build git

```bash
sudo yum install curl-devel expat-devel gettext-devel \
  openssl-devel perl-devel zlib-devel

sudo yum install asciidoc xmlto docbook2X

$ tar -zxf git-2.0.0.tar.gz
$ cd git-2.0.0
$ make configure
$ ./configure --prefix=/usr
$ make all doc info
$ sudo make install install-doc install-html install-info
```


### setup git
https://github.com/settings/keys

https://help.github.com/articles/generating-an-ssh-key/

```bash
ssh-keygen -t rsa -b 4096 -C "rishi.satsangi@gmail.com"
# start the ssh-agent in the background
eval "$(ssh-agent -s)"
ssh-add ~/.ssh/id_rsa
cat ~/.ssh/id_rsa.pub
# Attempt to ssh to GitHub
ssh -T git@github.com
git config --global user.name "Rishi Satsangi"
git config --global user.email "rishi.satsangi@gmail.com"
```

### node and npm

sudo yum install epel-release

### git tools
```bash
## download the git bash tools
wget https://raw.githubusercontent.com/git/git/master/contrib/completion/git-completion.bash
mv git-completion.bash .git-completion.bash
wget https://raw.githubusercontent.com/git/git/master/contrib/completion/git-prompt.sh
mv git-prompt.sh .git-prompt.sh

```


# bash_profile
```bash
# .bash_profile

PATH=$PATH:$HOME/bin

# Source global definitions
if [ -f /etc/bashrc ]; then
  . /etc/bashrc
fi

source ~/.git-prompt.sh
source ~/.git-completion.bash

export GIT_PS1_SHOWDIRTYSTATE=true
export GIT_PS1_SHOWUNTRACKEDFILES=true
export GIT_PS1_SHOWUPSTREAM="auto"

# Git related
alias gs='git status'
alias gl='git log'
alias gd='git diff'
alias ls="ls -al"

# edit bash
alias vb="vim ~/.bash_profile"
alias sb="source ~/.bash_profile"


export PS1="[\[$(tput sgr0)\]\[\033[38;5;241m\]\d \t\[$(tput sgr0)\]\[\033[38;5;15m\]] \[$(tput bold)\]\[\033[38;5;198m\]\u\[$(tput sgr0)\]\[$(tput sgr0)\]\[\033[38;5;15m\]@\[$(tput bold)\]\[$(tput sgr0)\]\[\033[38;5;30m\]\h\[$(tput sgr0)\]\[$(tput sgr0)\]\[\033[38;5;154m\]\w\[$(tput sgr0)\]\[\033[38;5;15m\]\[$(tput sgr0)\]\[$(tput bold)\]\[\033[48;5;25m\]\$(__git_ps1 "[%s]")\[$(tput sgr0)\]\\$ \[$(tput sgr0)\]"

# get colors from http://bashrcgenerator.com/
export LS_COLORS="fi=01:rs=0:di=38;5;154:ln=01;36:mh=00:pi=40;33:so=01;35:do=01;35:bd=40;33;01:cd=40;33;01:or=40;31;01:su=37;41:sg=30;43:ca=30;41:tw=30;42:ow=34;42:st=37;44:ex=01;32:*.php=38;5;45:*.js=38;5;202:*.json=38;5;202:*.md=38;5;199:*.gitignore=38;5;242:*node_modules=38;5;242:"

export PATH
```
