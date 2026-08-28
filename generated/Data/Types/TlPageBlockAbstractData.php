<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type PageBlock.
 *
 * @method static static hydrate(array $payload)
 */
abstract class TlPageBlockAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputPageBlockMap' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputPageBlockMapData::class,
        'pageBlockAnchor' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockAnchorData::class,
        'pageBlockAudio' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockAudioData::class,
        'pageBlockAuthorDate' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockAuthorDateData::class,
        'pageBlockBlockquote' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockBlockquoteData::class,
        'pageBlockBlockquoteBlocks' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockBlockquoteBlocksData::class,
        'pageBlockChannel' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockChannelData::class,
        'pageBlockCollage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockCollageData::class,
        'pageBlockCover' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockCoverData::class,
        'pageBlockDetails' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockDetailsData::class,
        'pageBlockDivider' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockDividerData::class,
        'pageBlockEmbed' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockEmbedData::class,
        'pageBlockEmbedPost' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockEmbedPostData::class,
        'pageBlockFooter' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockFooterData::class,
        'pageBlockHeader' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockHeaderData::class,
        'pageBlockHeading1' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockHeading1Data::class,
        'pageBlockHeading2' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockHeading2Data::class,
        'pageBlockHeading3' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockHeading3Data::class,
        'pageBlockHeading4' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockHeading4Data::class,
        'pageBlockHeading5' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockHeading5Data::class,
        'pageBlockHeading6' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockHeading6Data::class,
        'pageBlockKicker' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockKickerData::class,
        'pageBlockList' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockListData::class,
        'pageBlockMap' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockMapData::class,
        'pageBlockMath' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockMathData::class,
        'pageBlockOrderedList' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockOrderedListData::class,
        'pageBlockParagraph' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockParagraphData::class,
        'pageBlockPhoto' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockPhotoData::class,
        'pageBlockPreformatted' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockPreformattedData::class,
        'pageBlockPullquote' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockPullquoteData::class,
        'pageBlockRelatedArticles' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockRelatedArticlesData::class,
        'pageBlockSlideshow' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockSlideshowData::class,
        'pageBlockSubheader' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockSubheaderData::class,
        'pageBlockSubtitle' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockSubtitleData::class,
        'pageBlockTable' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockTableData::class,
        'pageBlockThinking' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockThinkingData::class,
        'pageBlockTitle' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockTitleData::class,
        'pageBlockUnsupported' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockUnsupportedData::class,
        'pageBlockVideo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\PageBlockVideoData::class,
    ];

    /** @var array<string, array{0:string,1:int}> camelCase param name => [flag word, bit] for flags.N?true params */
    public const TL_FLAG_BITS = [];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function hydrate(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for PageBlock');
        foreach ((new \ReflectionMethod($class, '__construct'))->getParameters() as $param) {
            $name = $param->getName();
            if (array_key_exists($name, $payload)) {
                continue;
            }
            $bits = $class::TL_FLAG_BITS[$name] ?? null;
            if ($bits !== null) {
                $word = (int) ($payload[$bits[0]] ?? 0);
                $payload[$name] = (bool) ($word >> $bits[1] & 1);
                continue;
            }
            $wireKey = self::tlWireKey($name);
            $payload[$name] = array_key_exists($wireKey, $payload) ? $payload[$wireKey] : null;
        }
        /** @var static */
        return $class::from($payload);
    }

    /** camelCase constructor param name to snake_case wire key (regex-free). */
    private static function tlWireKey(string $name): string
    {
        $out = '';
        foreach (str_split($name) as $i => $ch) {
            $out .= $i > 0 && $ch >= 'A' && $ch <= 'Z' ? '_' . strtolower($ch) : $ch;
        }
        return $out;
    }
}
