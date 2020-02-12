set mouse=a
set autochdir
let g:netrw_browse_split=4
let g:netrw_banner=0
let g:netrw_altv=2
let g:netrw_winsize=20
autocmd!
autocmd fileType netrw setl bufhidden=delete
autocmd tabNew 8 call feedkeys(":Vexplore\<CR>", 'n' 
autocmd VimEnter * Vexplore | execute "wincmd l"
autocmd VimEnter * rightbelow term bash
autocmd VimEnter * resize 8 | 2wincmd w
