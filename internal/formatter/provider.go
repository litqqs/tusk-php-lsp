package formatter

import (
	"bytes"
	"strings"

	"github.com/Tusk-PHP/lsp/internal/protocol"
	"mibk.dev/phpfmt/format"
	"mibk.dev/phpfmt/naive"
)

type Provider struct {
	//cfg *config.Config
}

func NewProvider() *Provider {
	return &Provider{}
}

func (p *Provider) Format(s string) string {
	in := strings.NewReader(s)
	var out bytes.Buffer
	opts := naive.PHP74Compat | naive.LowercaseKeywords
	err := format.Pipe("<stdin>", &out, in, opts)
	if err != nil {
		return s
	}
	return out.String()
}

func (p *Provider) FormatCode(s string) []protocol.FormattingResult {
	var r []protocol.FormattingResult
	ret := protocol.FormattingResult{}
	ret.Range.Start.Line = 0
	ret.Range.Start.Character = 0
	ret.Range.End.Line = 999999999
	ret.Range.End.Character = 0
	ret.NewText = p.Format(s)
	r = append(r, ret)
	return r
}
