"
" A VI Resource file for editing files with VI in the directory.
" Documentation: https://vimdoc.sourceforge.net/htmldoc/
" Copyright 2020 Christopher Reilly
"
set mouse=a                   " enable the mouse
set autochdir                 " automatically change the working directory when a file is opened
set autoindent                " automatic indentation
set antialias                 " window antialiasing
set background=dark           " adjust color scheme for a dark background
set visualbell                " use visual bell instead of auditory beep
let g:netrw_browse_split=4    "
let g:netrw_banner=0          " disable the banner
let g:netrw_altv=2
let g:netrw_winsize=20
autocmd!
autocmd fileType netrw setl bufhidden=delete
autocmd VimEnter * Vexplore | execute "wincmd l"
autocmd VimEnter * rightbelow term bash
autocmd VimEnter * resize 8 | 2wincmd w
